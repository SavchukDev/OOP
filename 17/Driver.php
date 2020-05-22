<?php

/*
Сделайте класс Driver (водитель), который будет наследовать от класса Employee. Пусть новый класс добавляет следующие свойства: водительский стаж, категория вождения (A, B, C, D), а также геттеры и сеттеры к ним.
*/

require_once 'Employee.php';

class Driver extends Employee
{
    private $experience;
    private $categories = [];

    public function getExperience()
    {
        return $this->experience;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function getCategories()
    {
        foreach($this->categories as $category) echo $category;

    }

    public function setCategories($categories)
    {
        $this->categories[] = $categories;
    }

}