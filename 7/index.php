<?php
require_once 'Student.php';

$user = new Student();

$user->course = 2;
$user->transferToNextCourse();
$user->transferToNextCourse();

echo $user->course;