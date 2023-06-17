<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>POST method</title>
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
            background: #0384fc;
            border: none;
            color: #fff;

            border-radius: 10px;
            margin-bottom: 10px;

        }
    </style>
    <?php

    if (isset($_POST["submit"])) {

        
        if (!empty($_POST["firstName"]) && !empty($_POST["lastName"])) {

            echo 'خوش امدید' . ' ' . $_POST['firstName'] .' '. $_POST['lastName'];
        } else {

            echo 'لطفا فیلد های مورد نظر را تکمیل فرمایید.';
        }
    }
    ?>



    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

        <label for="">نام
            <input type="text" name="firstName" placeholder="نام شما">
        </label><br>
        <label for="">نام خانوادگی
            <input type="text" name="lastName" placeholder="نام خانوادگی شما">
        </label>

        <input type="submit" name="submit" value="ارسال">

    </form>





</body>

</html>