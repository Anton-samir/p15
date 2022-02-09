<?php

function newAdd($number1 , $number2 = 0, $number3 = 0){
    return $number1 + $number2 + $number3;
}

function mulNumbers ($number1 = 1 , $number2 = 1 , $number3 = 1){
    return $number1 * $number2 * $number3;
}

function printFullName($firstName  , $lastName , $middleName = ""){
    echo "$firstName $middleName $lastName";
}

// printFullName("galal","husseny" , "abdelwahed");