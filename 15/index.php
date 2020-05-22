<?php
require_once 'User.php';

echo (new User)->setPatronymic('Kostantinovich')->setSurname('Savchuk')->setName('Philipp')->getFullName();