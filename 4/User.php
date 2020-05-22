<?php
/*1. Сделайте класс User, в котором будут следующие свойства - name (имя), age (возраст).
2. Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.
4. Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18. Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает.*/

class User
{
    public $name;
    public $age;

    public function setAge($age)
    {
       return $this->age <= 18 ? $this->age : $age;
    }

}