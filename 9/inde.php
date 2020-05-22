<?php

require_once "Employee.php";

$user = new Employee();

$user->setSalary(500);
$user->setAge(50);
echo $user->getAge();