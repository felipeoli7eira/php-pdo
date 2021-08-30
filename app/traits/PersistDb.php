<?php

namespace app\traits;

use app\models\queryBuilder\Insert;

trait PersistDb
{
    public function store(array $attributes): array
    {
        try
        {
            $sql = (new Insert)->sql($this->table, $attributes);
            $insert = $this->databaseConn->prepare($sql);
            $insert->execute($attributes);

            return [
                'error' => true,
                'data' => $this->databaseConn->lastInsertId()
            ];
        }
        catch (\PDOException $exception)
        {
            return [
                'error' => true,
                'data' => $exception->getMessage()
            ];
        }
    }

    public function update()
    {
        
    }
}
