<?php
/*1. Сделайте класс City (город), в котором будут следующие свойства: name (название города), population (количество населения).
2. Создайте 5 объектов класса City, заполните их данными и запишите в массив.
3. Переберите созданный вами массив с городами циклом и выведите города и их население на экран.
*/

class City
{
    public $name;
    public $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }

}