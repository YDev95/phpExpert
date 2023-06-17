<?php


$num1 = 32;
$num2 = 98;
$num3 = 200;


$users =  array(

    1 => [
        "name" => [
            "firstname" => "Mamad",
            "lastname" => "Ghiami",
            "nickname" => "golMamad"

        ],
        "age" => "18",
        "role" => "admin",
        "E-mail" => "mamad45@gmail.com",
        "Username" => "mamadgholi"

    ],
    2 => [
        "name" => "xahra",
        "age" => "27",
        "role" => "author",
        "E-mail" => "mxahar45@yahoo.com",
        "Username" => "zahra898"

    ],
    3 => [
        "role" => "co-admin",
        "age" => "17",
        "name" => "Erfan",
        "E-mail" => "efi2000@yahoo.com",
        "Username" => "Eeeerf"
    ]




);

$users = json_decode(json_encode($users));

print_r($users);

echo "<br>";
echo ($users->{1}->role) . "<br>";




if ($users->{1}->role == "user") {
    echo "<p Style = 'Color:green'>Hello, You've logged-in as administrator.</p>";
} else if ($users->{1}->age >= 30) {

    echo "<p Style = 'Color:green'>Hello, You've minimum age requirements</p>";
} elseif (strlen($users->{1}->username <= 12)) {
    echo "<p Style = 'Color:red'>Hello, Your username length neeeds to be at least 11 letters</p>";
} else {
    echo "Sorry, You do not have admin permission or age requirements to access this page.";
}
echo "<hr>";
