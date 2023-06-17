




<?php


 #Arithmic Operators
$x = 5;

$y = 9;

$z = $x + $y;

echo $z;

echo "<hr>";
echo "<hr>";

echo ($x - $y);
echo "<hr>";
echo "<hr>";

echo ($z * $x);


echo "<hr>";

    #Assignmant operators
 
    $k = 5;

    echo $k.'<br>';

    $k += 50;

    echo $k.'<hr>';


#Comparison Operators

$i = 20;

$j = 10;

var_dump($i != $j).'<br>';

var_dump($i <> $j);

var_dump($i == $j);
var_dump($i <= $j);
var_dump($i >= $j);

#Data type and amount comparison

var_dump($i === $j);


//Incrementing and Decrementing

$u = 50;

echo ++$u;
echo "<br>";

echo --$u;

echo "<hr>";

//Concatenation

$ki = "Hello";
$li = "World!";

echo $ki . $li;

echo "<br>";

echo $ki .= $li;
echo "<hr>";

// Spaceship operator introduce in PHP 7 <=> -> -1 0 1

$r = 10;

$t = 10;

$w = 25;

echo $r <=> $t;
echo "<br>";

echo $w <=> $t;
echo "<br>";

echo $t <=> $w;

echo "<hr>";
echo "<hr>";

// Logical Operators

// and &&
$x = 10;
$y = 20;

if(($x == 10) && ($y == 21)) {
    echo 'True';

} else{ 
echo 'false';
};

echo '<br>';

// or ||

if($x == 10 || $y == 21) {

    echo 'True';
} else{
echo 'False';
}

echo '<hr>';

// xor if only one condition was true return true can not have 2 or more true

if($x == 10 xor $y == 20) {

    echo 'True';
} else{
echo 'False';
}

echo "<hr>";

// Arrays union , Arrays declaring

$colorIndex1 = array("r" => "Red" , "y" => "yellow" , "B" => "Black");
$colorIndex2 = array("G" => "Green" , "y" => "yellow" , "B" => "Black");

var_dump($colorIndex1);
echo "<br>";

var_dump($colorIndex2);

echo "<br>";

var_dump($colorIndex1 + $colorIndex2);

echo "<br>";

print_r($colorIndex2 + $colorIndex1);

echo "<br>";

var_dump($colorIndex1 != $colorIndex2); 

// same  as <>
 echo "<br>";
 var_dump($colorIndex1 <> $colorIndex2);

