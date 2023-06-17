<?php


$_array = array(1, 2, 3, 4, 5, 6);


foreach ($_array as $nums) {

    if ($nums == 5) {

        continue;
    } else {
        echo $nums . "<br>";
    }
}

echo "<hr>";

$users = array(

    1 => [
        "name" => "Mohammad",
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
    ]);

    #print_r($users)."<br>";

    foreach($users as $user => $value){

        echo "ID: $user name: {$value["name"]} E-mail: {$value["E-mail"]}"."<br>";
    }
echo "<hr>";


// Course exercise

    $arraySize = count($users);
    $i = 0;
    $v = 1;
    
    $arrayIndexes = array_keys($users); 

    while ($i < $arraySize && $v <= $arraySize) {

      echo "ID: {$arrayIndexes[$i]} Name: {$users[$v]["name"]}
      Email: {$users[$v]["E-mail"]} Username: {$users[$v]["Username"]} <br>";

      $i++;
      $v++;

        # code...
    }

    