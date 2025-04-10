<?php


require 'Classes/house.php';

$house = new House();

$house->Area = 200;

echo "Husets areal er " . $house->Area . "m2";