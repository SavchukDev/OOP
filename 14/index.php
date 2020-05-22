<?php
require_once 'Arr.php';

echo (new Arr)->add(1)->append([2, 3, 4])->add(5)->getSum();