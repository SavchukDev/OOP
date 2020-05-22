<?php
/*
1. Реализуйте такой же класс Arr, методы которого будут вызываться в виде цепочки.
2. Добавьте в класс Arr еще один метод append, который параметром будет принимать массив чисел и добавлять эти числа в конец массива, хранящегося в объекте.
*/

class Arr
{
    public $numbers = [];

    public function add($numbers)
    {
        $this->numbers[] = $numbers;
        return $this;
    }

    public function append($numbers)
    {
        $this->numbers = $numbers;
        return $this;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }


}