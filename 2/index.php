<?php

require_once 'User.php';

$user = new User();

$user->name = 'Phil';
$user->age = 25;

echo $user->show();
