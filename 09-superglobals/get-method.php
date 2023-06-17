<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>GET method</title>
</head>

<body>


    <style>
        body {
            direction: rtl;
        }

        form {
            width: 300px;
            background: #c0ebe1;
            margin: 0 auto;
            padding: 10px;
            border-radius: 5px;
        }

        input {

            width: 100%;
            height: 30px;
            background: #fff;

            border: none;
            border-radius: 10px;
            margin-bottom: 10px;

        }

        input[type="submit"] {

            width: 100%;
            height: 30px;
            background: #3dd479;
            border: none;
            border-radius: 10px;
            margin-bottom: 10px;

        }
    </style>
 


    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">

        <label for="">نام
            <input type="text"  name="firstName" placeholder="نام شما">
        </label><br>
        <label for="">نام خانوادگی
            <input type="text" name="lastName" placeholder="نام خانوادگی شما">
        </label>

        <input type="submit" value="ارسال">

    </form>

    <?php
    if (!empty($_GET["firstName"]) && !empty($_GET["lastName"])) {

        echo 'خوش امدید' . ' ' . $_GET["firstName"] .' ' . $_GET["lastName"];
    } else {

        echo "فیلد های بالارا پر کنید!";
    }

    ?>
   <a href="/tests/test-get-method.php?name=ahmadkasravi&age=10">اموزش مقدماتی</a>


</body>

</html>