<?php

use app\models\User;

$layout->add('home');

$users = (new User)->all();
