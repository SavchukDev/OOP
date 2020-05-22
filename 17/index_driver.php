<?php
require_once 'Driver.php';

$driver = new Driver();

$driver->setExperience(1);
$driver->setCategories('B');

echo $driver->getExperience() . '<br>';
echo $driver->getCategories();