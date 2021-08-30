<?php

namespace app\models;
use PDO;

class Database
{
    public static function connect()
    {
        $dbConf = require __DIR__ . "/../../config.php";

        $pdo = new PDO(
            "mysql:host={$dbConf['db']['host']};dbname={$dbConf['db']['name']};charset={$dbConf['db']['charset']}",
            $dbConf['db']['user'],
            $dbConf['db']['passwd']
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $pdo;
    }
}
