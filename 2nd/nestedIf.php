<?php

$person = "female"; // female
$salary = 1500; // salary >= 1000 => rich , salary < 1000 => poor
# app => male , poor
# nested if with multiple echos
// if($person == "male"){
//     //male
//     if($salary >= 1000){
//         // rich
//         echo "male , rich";
//     }else{
//         // poor
//         echo "male , poor";
//     }
// }else{
//     //female
//     if($salary < 1000){
//         echo "female , poor";
//     }else{
//         echo "female , rich";
//     }
// }
# if using logical operators with one echo
// if($person == "male" && $salary >= 1000){
//     $message =  "male , rich";
// }elseif($person == 'male' && $salary < 1000){
//     $message = "male , poor";
// }elseif($person == 'female'  && $salary >= 1000){
//     $message = "female , rich";
// }else{
//     $message = "female , poor";
// }

// echo $message;

# nested if with one echo

// if($person == 'male'){
//     $message = "male";
//     if($salary >= 1000){
//         $message .= " , rich";
//     }else{
//         $message .= " , poor";
//     }
// }else{
//     $message = "female";
//     if($salary >= 1000){
//         $message .= " , rich";
//     }else{
//         $message .= " , poor";
//     }
// }
// echo $message;

# 2 ternary operators with out logical operators and one echo

// $message = ($person == 'female') ? "female" : "male";
// $message .= ($salary >= 1000 ) ? " , rich" : " , poor";
// echo $message;

# 2 if conidtions with out logical operators and one echo
// $message = "female";
// $status = "rich";
// if($person == 'male'){
//     $message = "male" ;
// }

// if($salary < 1000){
//     $status = "poor";
// }

// echo $message . ' , '. $status;