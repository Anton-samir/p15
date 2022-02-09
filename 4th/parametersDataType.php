<?php
// declare(strict_types=1);
// sum integers only => int o/p
function sumNumbers (float $number1 ,float $number2 ,?float $number3) :int
{
    return $number1 + $number2 + $number3;
}

var_dump( sumNumbers(1.9,2.1,3.5) );