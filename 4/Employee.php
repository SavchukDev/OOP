<?php
/*1. Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), salary (зарплата). Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.*/

class Employee
{
    public $name;
    public $salary;

    public function doubleSalary()
    {
        return $this->salary * 2;
    }

}
