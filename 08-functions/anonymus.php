<?php

// Regular Functions

function nameChangeCase(string $name)
{

    $result = array(
        "upper" => strtoupper($name),
        "lower" => strtolower($name)
    );

    return $result;
}

print_r(nameChangeCase("younes"));
echo "<hr>";

// anonymus functions

//anonymus functions can be calleback

// Anonnymus function can be assigned to variables


function nameChangeCase1(string $nameStr = null, $callback = null)
{

    $result = array(
        'upper' => strtoupper($nameStr),
        'lower' => strtolower($nameStr),
    );

    print_r($result);

    if (is_callable($callback)) {

        echo "Func is callable<br>";
        call_user_func($callback, $result);
    } else {
        echo "Func is not callable";
    }
}


/*$nameC = function (string $name) {
    print_r($name);
};*/

nameChangeCase1('younes', function ($name) {
    echo "data revieved";
    print_r($name);
});

echo "<hr>";

// Practice anonymus func - Script to get user from DB

$users = array(

    1 => [
        "name" => "Ahmad",
        "role" => "admin",
        "username" => "admin8989",
    ],
    2 => [
        "name" => "younes",
        "role" => "user",
        "username" => "un121212"
    ],
    3 => [
        "name" => "sara",
        "role" => "author",
        "username" => "sara98io"
    ]
);


function getUser($usersArray, Int $id = null, bool $fullData = false, string $dataToget = null, $returnUser)
{

    // Cheking what data admin wants    
    if ($fullData == false) {

        $resultData = $usersArray[$id][$dataToget];
    } else {

        $resultData = $usersArray[$id];
    }

    // anonymus func callable check

    if (is_callable($returnUser) == true) {


        call_user_func($returnUser, $resultData);
    } else {

        echo "Func is not callable!";
    }
}


// Calling func


getUser($users, 2, false, "role", function ($user) {

    if (is_array($user)) {

        print_r($user);
    } else {

        echo $user;
    }
});
