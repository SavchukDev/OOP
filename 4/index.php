<?php

/*3. Создайте объект класса User с именем 'Коля' и возрастом 25. С помощью метода setAge поменяйте возраст на 30. Выведите новое значение возраста на экран.*/

require_once 'User.php';

$firs_user = new User();

$firs_user->name = 'Kolya';
$firs_user->age = 25;

$firs_user->setAge('30');

echo $firs_user->age;