<?php 

$number = 5;
# pass by value
function printVar($number){
    echo ++$number .'<br>';
}

// printVar($number);
// echo $number .'<br>';

# pass by reference
$number2 = 10;
function printVar2(){
    global $number2;
    echo ++$number2 . '<br>';
}

// printVar2();

// echo $number2 .'<br>';

# pass by reference
$number3 = 20;
function printVar3 (&$number){
    echo ++$number . '<br>';
}

printVar3($number3);

// echo $number3;

// count();


function test (){
    
    return 1;

    echo "ok";

}


echo test();

