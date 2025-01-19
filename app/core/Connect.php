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
                "mysql:host=$dbVars[host];
                dbname=$dbVars[dbname]",
                "$dbVars[username]",
                "$dbVars[password]"
            );
        } catch (\Exception $e) {
            error_log($e->getMessage());
            die('MySQL is not connected!!!');
        }
    }

    public static function getAllTables(): false|array
    {
        try {
            $pdo = self::db();
            $sth = $pdo->prepare("SHOW TABLES");
            $sth->execute();
            return $sth->fetchAll(PDO::FETCH_COLUMN);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            echo('function getAllTables()');
        }
        return false;
    }

    public static function deleteTable($table): void
    {
        $tables = self::getAllTables();

        if (in_array($table, $tables)) {
            try {
                $sth = self::db()->prepare(
                    "DROP TABLE `$table`"
                );
                $sth->execute();
            } catch (\PDOException $e) {
                error_log($e->getMessage());
            }
        }
    }

    public static function addToTable($table, $fields, $fieldsValue): void
    {
        $table = strtolower($table);
        $pdo = self::db();
        $stm = $pdo->prepare("INSERT INTO `$table` ($fields) VALUES ($fieldsValue);");
        $stm->execute();
    }

    public static function getDataFromTable($table): false|array
    {
        $table = strtolower($table);
        $tables = self::getAllTables();
        if (in_array($table, $tables)) {
            try {
                $pdo = self::db();
                $stm = $pdo->prepare("SELECT * FROM $table");
                $stm->execute();
                return $stm->fetchAll(2);
            } catch (\PDOException $e) {
                error_log($e->getMessage());
                echo('getDataFromTable');
            }
        }
        return false;
    }

    public static function deleteId($table, $id): void
    {
        $table = strtolower($table);
        $pdo = self::db();
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
