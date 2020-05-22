<?php

// 1. Сделайте класс Employee, в котором будут следующие публичные свойства - name (имя), age (возраст), salary (зарплата). Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта.
// 2. Создайте объект класса Employee с именем 'Вася', возрастом 25, зарплатой 1000.

class Employee
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

}