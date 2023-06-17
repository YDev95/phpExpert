<?php


$daysOfWeek = strtolower(date("l"));

echo $daysOfWeek . '<br>';

echo date("l jS \of F Y h:i:s A") . "<br>";


switch ($daysOfWeek) {
    case "saturday":
        echo "شنبه" . "<br>";
        break;
    case "sunday":
        echo "یکشنبه" . "<br>";
        break;
    case "monday":
        echo "دوشنبه" . "<br>";
        break;
    case "tuesday":
        echo "سه شنبه" . "<br>";
        break;
    case "wednesday":
        echo "چهارشنبه" . "<br>";
        break;
    case "tursday":
        echo "پنجشنبه" . "<br>";
        break;
    case "friday":
        echo "جمعه" . "<br>";
        break;

    default:
        echo "No days matched";
}

// Switch practise:

$num = 5;


switch ($num) {

    case 1:
        echo "You guessed the right number";
        break;
    case 2:
        echo "You guessed the right number";
        break;
    case 3:
        echo "You guessed the right number";
        break;
    case 4:
        echo "You guessed the right number";
        break;
    case 5:
        echo "You guessed the right number";
        break;

    default:
        echo "You lost!!";
}
