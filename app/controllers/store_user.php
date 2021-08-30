<?php

$name = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_STRIPPED);
$email = filter_input(INPUT_POST, 'user_email', FILTER_SANITIZE_STRIPPED);
$password = filter_input(INPUT_POST, 'user_password', FILTER_SANITIZE_STRIPPED);

$user = new app\models\User;
$result = $user->store(
    [
        'name' => $name,
        'email' => $email,
        'password' => $password
    ]
);;

header('Location: /');