<?php

// Не подсматривая в мой код реализуйте такие же классы User, Employee. Наследовать один класс от другого.

class User
{

    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

}