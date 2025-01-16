<?php

namespace app\core;

use PDO;

class Connect extends Db
{
    public static function db($database = null): PDO
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
            if ($database == null) {
                return new PDO(
                    "mysql:host=$dbVars[host]",
                    "$dbVars[username]",
                    "$dbVars[password]"
                );
            } else {
                return new PDO(
                    "mysql:host=$dbVars[host];
                    dbname=$dbVars[dbname]",
                    "$dbVars[username]",
                    "$dbVars[password]"
                );
            }
        } catch (\Exception $e) {
            error_log($e->getMessage());
            die('MySQL is not connected!!!');
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

    public static function deleteTable($table): void
    {
        $tables = self::getAllTables();

        if (in_array($table, $tables)) {
            try {
                $sth = self::db(CONFIG['dbname'])->prepare(
                    "DROP TABLE `$table`"
                );
                $sth->execute();
            } catch (\PDOException $e) {
                error_log($e->getMessage());
            }
        }
    }

    public static function addToTable($dbname, $table, $fields, $fieldsValue): void
    {
        $pdo = self::db($dbname);
        $stm = $pdo->prepare("INSERT INTO `$table` ($fields) VALUES ($fieldsValue);");
        $stm->execute();
    }

    public static function getDataFromTable($dbname, $table): false|array
    {
        $tables = self::getAllTables();
        if (!in_array($table, $tables)) {
            try {
                $stm = self::db($dbname)->prepare("SELECT * FROM `$table`;");
                $stm->execute();
                return $stm->fetchAll(2);
            } catch (\PDOException $e) {
                error_log($e->getMessage());
            }
        }
        return false;
    }

    public static function importTableToDb($dbname, $table, $sqlFile): void
    {
        $tables = self::getAllTables();
        $sqlPath = APP . '/sql/' . $sqlFile;

        if (file_exists($sqlPath)) {
            if (!in_array($table, $tables)) {
                try {
                    $pdo = self::db($dbname);
                    $sql = file_get_contents($sqlPath);
                    $pdo->exec($sql);
                    $pdo->exec($sql);
                } catch (\PDOException $e) {
                    error_log($e->getMessage());
                }
            }
        }
    }

    public static function deleteId($dbname, $table, $id): void
    {
        $pdo = self::db($dbname);
        $stm = $pdo->prepare("DELETE FROM `$table` WHERE `id` = :id;");
        $stm->bindParam(':id', $id);
        $stm->execute();
    }

    public static function task1($dbname): false|array
    {
        $pdo = self::db($dbname);
        $sql =
            'SELECT carbrands.carBrand, carmodels.carModel, carmodels.endDate FROM carmodels
            INNER JOIN carbrands ON carmodels.carBrand_id = carbrands.id
            WHERE carmodels.endDate < 2018';
        $stm = $pdo->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(2);
    }

    public static function task2($dbname): false|array
    {
        $pdo = self::db($dbname);
        $sql =
            'SELECT carbrands.carBrand, carmodels.carModel, workcosts.workType, workcosts.workCost
            FROM carmodels
            INNER JOIN carbrands ON carmodels.carBrand_id = carbrands.id
            INNER JOIN workcosts ON carmodels.workType_id = workcosts.id
            WHERE workcosts.workCost < 1000';
        $stm = $pdo->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(2);
    }

    public static function task3($dbname): false|array
    {
        $pdo = self::db($dbname);
        $sql =
            'SELECT carbrands.carBrand, carmodels.carModel, workcosts.workType, workcosts.workCost, carmodels.carType
            FROM carmodels
            INNER JOIN carbrands ON carmodels.carBrand_id = carbrands.id
            INNER JOIN workcosts ON carmodels.workType_id = workcosts.id
            ORDER BY carmodels.carType';
        $stm = $pdo->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(2);
    }
}
