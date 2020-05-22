<?php


class Arr
{

    public $numbers = [];

    public function __construct($numbers)
    {
        $this->numbers = $numbers;
    }

    public function addNum($numbers)
    {
        $this->numbers[] = $numbers;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }

}