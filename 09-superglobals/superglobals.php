<?php


$x = 10;

$y = 20;

echo "<pre>";
var_dump ($GLOBALS);

function sum () {

    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

}
sum();

echo $GLOBALS['z'];

var_dump($_SERVER);