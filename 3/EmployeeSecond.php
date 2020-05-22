<?php

/*1. Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).
2.Сделайте в классе Employee метод getName, который будет возвращать имя работника.
3. Сделайте в классе Employee метод getAge, который будет возвращать возраст работника.
4. Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника.
5. Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так.*/


class EmployeeSecond
{
    public $name;
    public $age;
    public $salary;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function checkAge()
    {
        return $this->age > 18 ? true : false;
    }
}