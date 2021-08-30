<?php

namespace app\models;

use app\models\Database;
use app\traits\PersistDb;

abstract class Model
{
    use PersistDb;

    protected $databaseConn;

    public function __construct()
    {
        if ( is_null($this->databaseConn) ) {
            $this->databaseConn = Database::connect();
        }
    }

    public function all()
    {
        $allQuery = "SELECT * FROM {$this->table}";
        $all = $this->databaseConn->prepare($allQuery);
        $all->execute();

        return $all->fetchAll();
    }

    public function find(string $field, array $params)
    {
        $findQuery = "SELECT * FROM {$this->table} WHERE {$field} = :{$field}";
        $find = $this->databaseConn->prepare($findQuery);
        $find->execute($params);
        return $find->fetch();
    }

    public function delete(int $resourceID): int
    {
        $deleteQuery = "DELETE FROM {$this->table} WHERE id = :resource_id";
        $delete = $this->databaseConn->prepare($deleteQuery);
        $delete->bindParam(":resource_id", $resourceID, \PDO::PARAM_INT);
        $delete->execute();

        return $delete->rowCount();
    }
}
