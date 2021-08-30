<?php

namespace app\models;

class User extends Model
{
    protected $table = "users";

    // public function store(array $attributes): array
    // {
    //     try
    //     {
    //         $insert = "INSERT INTO {$this->table} (name, email, password) VALUES (:name, :email, :password)";
    //         $stmt = $this->databaseConn->prepare($insert);
    //         $stmt->execute($attributes);
    //         return [
    //             'error' => false,
    //             'data' => $this->databaseConn->lastInsertId()
    //         ];
    //     }
    //     catch (\PDOException $exception) {
    //         return [
    //             'error' => true,
    //             'data' => $exception->getMessage()
    //         ];
    //     }
    // }
}
