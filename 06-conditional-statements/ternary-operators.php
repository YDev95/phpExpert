<?php


$num = 100;

if ($num == 100) {
   $msg = "$num is equal too 100 ";
}
else{

    $msg = "$num is not equal to 100";
}


echo $msg."<hr>";

// Ternary Operators

$msg = ($num == 99) ? "$num is equal too 99" : "$num is not equal to 100";

echo $msg;


// ternary Practices

$name = "MAMAD";
echo "<hr>";

$goo = ($name == strtoupper($name)) ? "Your name ($name)is Correct!"  : "Your name is incorrect";

echo $goo;