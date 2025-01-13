<?php

namespace app\core;

use PDO;

class Connect extends Db
{
    public static function db(): PDO
    {
        $db = new db(
            CONFIG['host'],
            CONFIG['dbname'],
            CONFIG['charset'],
            CONFIG['username'],
            CONFIG['password'],
        );
        $dbVars = get_object_vars($db);

        try {
            return new PDO(
                "mysql:host=$dbVars[host]",
                "$dbVars[username]",
                "$dbVars[password]"
            );
        } catch (\Exception $e) {
            error_log($e->getMessage());
            die('MySQL is not connected!');
        }
    }

    public static function getAllDatabases(): false|array
    {
        return self::db()
            ->query('SHOW DATABASES')
            ->fetchAll(PDO::FETCH_COLUMN);
    }

    public static function createNewDb($dbname): void
    {
        try {
            self::db()->prepare(
                "CREATE DATABASE $dbname COLLATE utf8_general_ci"
            );
        } catch (\PDOException $e) {
            error_log($e->getMessage());
        }
    }

    public static function connect(): void
    {
        $databases = self::getAllDatabases();

        if (!in_array(CONFIG['dbname'], $databases)) {
            self::createNewDb(CONFIG['dbname']);
        }

        $pdo = self::db();
        $stm = $pdo->prepare("SELECT * FROM `ams-software_storage`");
        dump($stm);
        $stm->execute();
    }
}
