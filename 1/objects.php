<?php
/*1. Создайте объект класса Employee, затем установите его свойства в следующие значения - имя 'Иван', возраст 25, зарплата 1000.
2. Создайте второй объект класса Employee, установите его свойства в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
3. Выведите на экран сумму зарплат Ивана и Васи.
4. Выведите на экран сумму возрастов Ивана и Васи.*/


include 'Employee.php';

$first_worker = new Employee();
$second_worker = new Employee();

$first_worker->age = 25;
$first_worker->name = 'Ivan';
$first_worker->salary = 1000;

$second_worker->age = 26;
$second_worker->name = 'Vasya';
$second_worker->salary = 2000;

echo $first_worker->salary + $second_worker->salary . "<br>";
echo $first_worker->age + $second_worker->age;