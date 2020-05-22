<?php

require_once 'Student.php';

$user = new Student('Phil');

echo $user->getName();
echo $user->transferToNextCourse();
echo $user->getCourse();

