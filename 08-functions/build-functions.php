<?php

// Creating Function


function funcName($paramets, $paramets2)
{

    //Code to get executed

    #echo $paramets.$paramets2;

    #get something return from function

    return;
}


// sum function

function sum($x=null,$y=null,$z=null){


        return $x+$y+$z;

}
echo sum(1,5). "<br>";


//functions unlimited argomans (php 5.1 syntax)

function sum2(){

    //this func return an array of args
    $args = func_get_args();

    //we sum up the array of args
    return array_sum($args);
    
}


echo sum2(1,23,32,0.99,876,65,7142). "<br>";


// unlimited argomans in php 5.1 later

function sum3(...$num){

    //this func return an array of args
    
    
    //we sum up the array of args
    return array_sum($num);
    
}
echo sum3(234234,4324,342342,1,23,32,0.99,876,65,7142);