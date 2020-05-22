<?php

require_once 'City.php';

$cities = [
    new City('LA', 1000),
    new City('Kyiv', 500),
    new City('NY', 100)
];

foreach ($cities as $city) {
    echo $city->name. ' - ' .$city->population . "<br>";
}