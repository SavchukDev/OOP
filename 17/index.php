<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


require_once 'Employee.php';

$employee = new Employee();


$employee->setSalary(1000);
$employee->setName('Коля');
$employee->setAge(25);

echo $employee->getSalary() . '<br>';
echo $employee->getName() . '<br>';
echo $employee->getAge() . '<br>';