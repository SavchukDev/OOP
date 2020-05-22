<?php
/*
1. Сделайте класс User, у которого будут приватные свойства surname (фамилия), name (имя) и patronymic (отчество).

Эти свойства должны задаваться с помощью соответствующих сеттеров.

Сделайте так, чтобы эти сеттеры вызывались цепочкой в любом порядке, а самым последним методом в цепочке можно было вызвать метод getFullName, который вернет ФИО юзера (первую букву фамилии, имени и отчества).
*/

class User
{

    public $surname;
    public $name;
    public $patronymic;

    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;
        return $this;
    }

    public function getFullName()
    {
        return mb_substr($this->surname, 0, 1).mb_substr($this->name, 0, 1) . mb_substr($this->patronymic, 0, 1);
    }


}