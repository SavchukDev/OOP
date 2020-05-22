<?php
/* 6. Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников.*/

require_once "EmployeeSecond.php";

$first_user = new EmployeeSecond();
$second_user = new EmployeeSecond();

$first_user->name = 'Phil';
$first_user->salary = 1500;

$second_user->name = 'Vitalik';
$second_user->salary = 2000;

echo $first_user->getSalary() + $second_user->getSalary();