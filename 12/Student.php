<?php

/*
1. Не подсматривая в мой код реализуйте такой же класс Student.
2. Модифицируйте метод transferToNextCourse так, чтобы при переводе на новый курс выполнялась проверка того, что новый курс не будет больше 5.
*/

class Student
{
    private $name;
    private $course;

    public function __construct($name)
    {
        $this->name = $name;
        $this->course = 1;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function transferToNextCourse()
    {
        if($this->isCourseCorrect($this->course)) {
            $this->course++;
        }
    }

    private function isCourseCorrect($course)
    {
        return $course < 5;
    }
}