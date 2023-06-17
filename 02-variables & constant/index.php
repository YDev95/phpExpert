<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//Variables test
$num = 10;
$numberjsdjs = '90';
$number = 980;

echo $number . $num . $numberjsdjs; 

//Constants

const URL = "https://7learn.com";

echo "<hr>";

echo URL;

echo "<br>";

define("BASEURL","https://7learn.com",true);

echo BASEURL;

function test() {

    echo "<br>";
    echo BASEURL;


}
test()


?>

</body>
</html>

