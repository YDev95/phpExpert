<?php


$num = 0;
$num2 = 0;
$num3 = 0;

while(true){

    echo "<span style= 'color:white; background-color:black;'> $num </span><br>";
    
    if ($num == 10) {
       
        break;
    }

    $num++;
    
}
echo "<hr>";

// do while Loop

// it will first execute the statements once, even if the condition is false.

do {
    
    echo "<span style= 'color:red; background-color:gray;'> $num2 </span><br>";
    
    $num2++;

} while ($num2 <= 10);

echo "<hr>";
// do while if (same)

do {
    echo "<span style= 'color:white; background-color:red;'> $num3 </span><br>";
    
    if ($num3 == 10) {
        break;
    }
    else{
        $num3++;
    }

} while (true);


// for loop

echo "<hr>";

for ($i = 0; $i <= 10; $i++) {
    echo " $i <br>";

}

// getting data by loop statements from json or data base

$myExs = array(["sahar",20],["maryam",19],["pariya",32],["Elahe",18],["haniye",25]);

for($k=0;$k<=4;$k++){

    echo  "name:{$myExs[$k][0]} age:{$myExs[$k][1]}<br>";
}

// using "while" for getting data
echo "<hr>";

$i = 0;

while($i < sizeof($myExs)){

    echo  "name:{$myExs[$i][0]} age:{$myExs[$i][1]}<br>";

    $i++;

}
