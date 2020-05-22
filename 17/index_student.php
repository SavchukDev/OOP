<?php

require_once 'Student.php';

$student = new Student();

$student->setName('Phil');
$student->setAge(34);
$student->setCourse(1);

echo $student->getCourse();