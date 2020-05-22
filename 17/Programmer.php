<?php
/*
Сделайте класс Programmer, который будет наследовать от класса Employee. Пусть новый класс имеет свойство langs, в котором будет хранится массив языков, которыми владеет программист. Сделайте также геттер и сеттер для этого свойства.
*/

require_once 'Employee.php';

class Programmer extends Employee
{
    private $langs = [];

    public function getLangs()
    {
        return $this->langs;
    }

    public function setLangs($arr)
    {
        foreach ($arr as $lang) {
            $this->langs = $lang;
        }
    }

}