<?php
/*1. Сделайте класс Rectangle (прямоугольник), в котором в свойствах будут записаны ширина и высота.
2. В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.
3. В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника.*/

class Rectangle
{
    public $width;
    public $height;

    public function getSquare()
    {
       return $this->width * $this->height;
    }

    public function getPerimeter()
    {
        return $this->width * 2 + $this->height*2;
    }

}