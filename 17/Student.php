<?php
//Не подсматривая в мой код реализуйте такой же класс Student, наследующий от класса User.
require_once 'User.php';

class Student extends User
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

}