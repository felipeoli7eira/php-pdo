<?php

use app\models\User;

$users = new User;
dd($users->all());

// require __DIR__ . "/../views/index.php";