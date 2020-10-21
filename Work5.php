<?php

$bmw = [
    'model' => 'x5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2016
];

$toyota = [
    'model' => 'Corolla',
    'speed' => 115,
    'doors' => 5,
    'year' => 2010
];

$opel = [
    'model' => 'Corsa',
    'speed' => 100,
    'doors' => 5,
    'year' => 2008
];

$cars =['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

foreach ($cars as $name=> $car) {
    echo "CAR $name<br>";
    echo "{$car['model']} {$car['speed']} {$car['doors']} {$car['year']}<br>";
}