<?php


$car = new stdClass;

$car -> name  = "Benz";
$car -> model = "c200 AMG";



$car2 = Clone $car;

print_r($car2);

echo "<br><br>";

$car2 -> name = "Audi";

echo $car2 -> name."<br>";
echo $car -> name;

