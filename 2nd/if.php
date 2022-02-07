<?php

// if(TRUE || FALSE){
//     // code
// }

// $x = [];
// X = 0 , '0' , '' , null , [] , false
// if($x){
//     echo "true";
// }else{
//     echo "false";
// }


// $order = 'p';

// $order = 's';

// $order = 'w';

// $order = 'd';


// if($order == 'p'){ // 25%
//     $status = "Pending";
// }elseif($order == 's'){ // 25%
//     $status = "Shipped";
// }elseif($order == 'w'){ // 25%
//     $status = "on your way";
// }else{ // 25%
//     $status = "deliverd";
// }

// if($order == 'p'){ // 25%
//     $status = "Pending";
// }elseif($order == 's'){ // 25%
//     $status = "Shipped";
// }elseif($order == 'w'){ // 25%
//     $status = "on your way";
// }elseif($order == 'd'){ // 25%
//     $status = "deliverd";
// }

// echo $status;


///////////////////////////

$status = "Active";
// $message = "";
if($status == "Active"){
    $message = "Online";
}

echo $message;