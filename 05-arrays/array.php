<?php

// Indexed Arrays

$car = array("benz" , "bmw" , "Audi");

var_dump($car);
echo "<br>";

print_r($car[1]);

// Associative Arrays

$countries = array("UK" => "London", "Japan" => "Tokyo", "Iran" => "Tehran", "Germany" => "Berlin");

echo "<br>";
echo $countries["UK"];

echo "<br>";

print_r($countries["Japan"]);

echo "<hr>";

// Multi Dimentional Arrays

$users = array(

    1 => [
        "name" => [
            "firstname" => "Mamad",
            "lastname" => "Ghiami",
            "nickname" => "golMamad"

        ],
        "E-mail" => "mamad45@gmail.com",
        "Username" => "mamadgholi"

    ],
    2 => [
        "name" => "xahra",
        "E-mail" => "mxahar45@yahoo.com",
        "Username" => "zahra898"

    ],
    3 => [

        "name" => "Erfan",
        "E-mail" => "efi2000@yahoo.com",
        "Username" => "Eeeerf"
    ]


    );

    var_dump($users[1]);

    echo "<br>";
    echo $users[1]["name"]["nickname"];

    $name = $users[1]["name"]["nickname"];
    $email = $users[1]["E-mail"];

    

    echo "<br>";
    
    echo "<p Style = 'Color:Grenn'> Welcome {$name} </p>" . " " . "<p Style = 'Color:Red'> this is your E-mail adress: {$email}</p>";

    




