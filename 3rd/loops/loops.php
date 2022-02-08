<?php

$users = [
    'nancy',
    'ahmed',
    'mohamed',
    'jhon',
    'norhan',
    'galal',
    'maha'
];
// start 1 => end 20  ,step ++1 , 20 students
// start 1 => end 36  , step +2 , 20 students
// start 0 => end 19  , step +1 , 20 
// start 0 => end -19 , step -1 , 20
// start 10 => end 200 , step +10 , 20


# for
// for(start;end;step){
    // code to be repeated
// }

// for($counter = 1;$counter <= 5;$counter++){
//     echo "Hello $counter <br>";
// }

// for ($i=5; $i >= 1 ; $i--) { 
//     echo "hello $i <br>";
// }
$lastIndex = count($users) - 1;
for($i = 0;$i <= $lastIndex;$i++){
    echo $users[$i] . '<br>';
}

// for($counter = $lastIndex;$counter >= 0;$counter--){
//     echo $users[$counter] . '<br>';
// }


// for(intial counter value;true || false; inc/dec counter){
//     // code
// }

# while
// intial counter value 
// while(true || false){
    // code to be repeated

    // inc/dec counter
// }
// $counter = 0;
// while($counter <= $lastIndex){
//     echo $users[$counter] . '<br>';
//     $counter++;
// }


# do while 
// intial counter value 
// do{
    // code to be repeated

    // inc/dec counter
// }while(TRUE || FALSE);

// $i = $lastIndex;
// do{
//     echo $users[$i] . '<br>';
//     $i--;
// }while($i < 0);


# foreach
# foreach (countable as $var1=>$var2){
    // code
// }
// $product = [
//     'id'=>5,
   
//     'price'=>5000,
//     'status'=>true,
//     // 'name'=>'laptop x'
//     'name'=>'laptop',
// ];

// foreach ($users as $index => $value) {
//     echo $index . ' ===>>> ' . $value . '<br>';
// }

// foreach ($product as $key => $value) {
//     echo $key . ' ===>>> ' . $value . '<br>';
// }

$productObject = (object)[
    'id'=>5,
    'price'=>5000,
    'status'=>true,
    'name'=>'laptop',
];

// foreach ($productObject as $property => $value) {
//     echo $property . ' ===>>> ' . $value . '<br>';
// }