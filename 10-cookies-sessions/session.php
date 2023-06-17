<?php

session_start();

    $_SESSION["userName"] = "ali989";
    $_SESSION["email"] = "aliabdoli34@gmail.com";

    echo $_SESSION["userName"]." ".$_SESSION["email"]."<br>";


if (!isset($_SESSION['counter'])){

    $_SESSION['counter'] = 1;


}else{


    $_SESSION['counter'] += 1;
}
// echo $_SESSION['counter'];

echo "you have visited this page {$_SESSION['counter']} times";