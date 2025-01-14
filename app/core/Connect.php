<?php

namespace app\core;

use PDO;

class Connect extends Db
{
    public static function db($dbname = null): PDO
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
            if ($dbname == null) {
                return new PDO(
                    "mysql:host=$dbVars[host]",
                    "$dbVars[username]",
                    "$dbVars[password]"
                );
            }
            return new PDO(
                "mysql:host=$dbVars[host];
                    dbname=$dbVars[dbname]",
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

    public static function getAllTables(): false|array
    {
        return self::db(CONFIG['dbname'])
            ->query('SHOW TABLES')
            ->fetchAll(PDO::FETCH_COLUMN);
    }

    public static function createNewDb($dbname): void
    {
        $databases = self::getAllDatabases();

        if (!in_array(CONFIG['dbname'], $databases)) {
            try {
                $sth = self::db()->prepare(
                    "CREATE DATABASE `$dbname` COLLATE utf8_general_ci"
                );
                $sth->execute();
            } catch (\PDOException $e) {
                error_log($e->getMessage());
            }
        }
    }

    public static function createNewTable($table, $tableParams): void
    {
        $tables = self::getAllTables();

        if (!in_array($table, $tables)) {
            try {
                $sth = self::db(CONFIG['dbname'])->prepare(
                    "CREATE TABLE `$table` (
					id integer auto_increment primary key, 
					$tableParams"
                );
                $sth->execute();
            } catch (\PDOException $e) {
                error_log($e->getMessage());
            }
        }
    }

    public static function addCarBrands($dbname, $carBrand): void
    {
        $pdo = self::db($dbname);
        $stm = $pdo->prepare("SELECT * FROM carmodels where carBrand = :carBrand");
        $stm->bindParam(':carBrand', $carBrand);
        $stm->execute();
        dump($stm->fetchAll(2));
    }
}
