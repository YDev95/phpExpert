<?php



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

    /*
    $jsonUsers = json_encode($users);

    print_r($jsonUsers);

    echo "<br><br>";

    $jsonUsersDe = json_decode($jsonUsers,1);

    print_r($jsonUsersDe); 

    echo "<br><br>";

    echo "<hr><hr>";

    $usersObj = (object) $users;
    
    print_r($usersObj);

    echo "<br>"; */

    $jsonUsers = json_encode($users);

    print_r($jsonUsers);

    echo "<br><br>";

    $jsonUsersDe = json_decode($jsonUsers);

    print_r($jsonUsersDe);

    echo "<br><br>";

    echo($jsonUsersDe->{1}->name->nickname);



    
