<?php

// function functionName (i/p) {
    // block of code
    // return o/p /
// }

# no i/p , no o/p
function addv1 (){
    $number1 = 10;
    $number2 = 5;
    $sum = $number1 + $number2;
    echo $sum;
}
// addv1();

# i/p , o/p 
function addv2 ($number1 , $number2){
    return $number1 + $number2;
}
$sum = addv2(7,4);
// echo $sum;

# i/p , no o/p 
function addv3 ($number1 , $number2){
    echo $number1 + $number2;
}
// echo addv3(10,5);

# no i/p , o/p
function addv4 (){
    $number1 = 10;
    $number2 = 5;
    return $number1 + $number2;
}
echo addv4() +  + 10;
