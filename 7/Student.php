<?php
// Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-
// В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс.
// Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.

class Student
{
    public $name;
    public $course;

    public function transferToNextCourse()
    {
        $nextCourse = $this->course + 1;

        if ($this->isCourseCorrect($nextCourse)) {
            $this->course = $nextCourse;
        }
    }

    private function isCourseCorrect()
    {
        return $this->course <= 5;
    }
}