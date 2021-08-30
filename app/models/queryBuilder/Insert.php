<?php

namespace app\models\queryBuilder;

class Insert
{

    public function sql($table, $attributes)
    {
        $query = "INSERT INTO {$table} (";
        $query .= implode ( ', ', array_keys($attributes) ) . ') VALUES (:';
        $query .= implode ( ', :', array_keys($attributes) ) . ')';

        return $query;
    }
}
