<?php

require_once "Employee.php";

$first_worker = new Employee('Phil', 25, 1000);
$second_worker = new Employee('Petya', 30, 2000);

echo $first_worker->salary + $second_worker->salary;