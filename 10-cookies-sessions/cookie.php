<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting Cookie</title>
</head>
<body>

<?php
$cookieName = "user";
$cookieValue = "Younes";

setcookie($cookieName,$cookieValue,time() + 86400,"/");


if(isset($_COOKIE[$cookieName])){

    echo "there are some cookies. cookie name is $cookieName";
}else{

    echo "there is no cookies";
}

?>

</body>
</html>