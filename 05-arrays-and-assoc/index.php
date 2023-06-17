<?php


 // Multi Dimention arrays

$users = array(

    1 =>[
        "name" =>[
            "firstname"=>"Mohammad",
            "lastname"=>"naghiani",
            "nickname"=>"golMamad"
        ],
        "username"=>"Mamad1374",
        "email"=>"mamad5678@gmail.com"
    ],
    2 =>[
        "name" =>[
            "firstname"=>"ali",
            "lastname"=>"fatahi",
            "nickname"=>"AliJoon12"
        ],
        "username"=>"Aliali89",
        "email"=>"ali123@yahoo.com.com"
    ],
    3 =>[
        "name" =>[
            "firstname"=>"Roxana",
            "lastname"=>"karampoor",
            "nickname"=>"Roxi090"
        ],
        "username"=>"roro6767",
        "email"=>"roro6767@gmail.com"
    ]

    );

   var_dump($users);
    echo '<hr>';
    
    // getting data out of array by calling the key

    echo "<p Style='Color:red'>Getting data out of array by calling the key  </p>";
 print_r($users[3]["name"]["nickname"]);

 echo "<hr>";

 // Encode and Decode from array to Json and reverse

 $users_Json = json_encode($users);


 print_r($users_Json);

 echo "<hr>";

 $users_decod = json_decode($users_Json);

 print_r($users_decod);

 // turning an array into stdClass OBJECTS

 echo "<hr>"; 

 $users_obj = (object) $users;

 print_r($users_obj);

   
// Getting data out of object stdClass 

echo "<p Style= 'color:red'> Getting data out of object stdClass</p>";

echo($users_decod->{3}->name->nickname);




    