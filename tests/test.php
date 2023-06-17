<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تمرین جدول ضرب</title>
    <style>
        body{direction: rtl;}
        form{background-color: #efefef;width: 350px;margin: 0 auto;padding: 10px;border-radius: 7px;}
    input{width: 100%;height: 50px;border-radius: 5px;border: none;margin-bottom: 10px;font-family: iransans;margin-top: 20px;}
    input[type=submit]{background-color: tomato;color:#ffffff;padding: 7px;font-family: iransans;}
    .text{    margin: 30px auto;
    text-align: center;
    width: 350px;
    padding: 8px;
    background-color: #81fb7d;
    color: #464646;
    border-radius: 5px;
    border-right: 6px solid #057901;
    border-top: 2px solid #32b52d;
    border-bottom: 2px solid #32b52d;
    border-left: 2px solid #32b52d;}
    tr:nth-child(even) {background-color: #f2f2f2;}
    table{border-bottom: 1px solid #ddd;margin: 0 auto;width: 400px;border-radius: 6px;}
    th {background-color: #04AA6D;color: white;text-align: center;}
    th, td {border-bottom: 1px solid #ddd;height: 30px; text-align: center;}
    </style>
</head>
<body>
<?php
                        
                        echo "<table border ='1' style='border-collapse: collapse'>";
                        for ($a=1; $a <= 10; $a++) {
                            echo "<tr> n";
                            for ($b=1; $b <= 10; $b++) {
                                $multiplication  = $a * $b;
                                echo "<td>$multiplication</td> n";
                            }
                            echo "</tr>";
                        }
                            echo "</table>";
                      


     ?>
</body>
</html>