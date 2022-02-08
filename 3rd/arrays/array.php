<?php

$name1 = 'nancy';
$name2 = 'ahmed';
$name3 = 'mohamed';
$name4 = 'john';

#indexed array => array with numeric keys => element[index,value]

$users = [
    'nancy',
    'ahmed',
    'mohamed',
    'jhon',
    'norhan',
    'norhan']; // unique numbers
// $usres = array('nancy','ahmed','mohamed','jhon',,1,2.5,false,null,[],(object)[]);
// 6 elements
// 0->5
// last index = count of elements - 1
// $lastIndex = count($users) - 1;
// echo $users[0] .' '. $users[1]; // get value from indexed array
$users[count($users)] = 'galal'; // set value
$users[count($users)] = 'marwa';
$users[count($users)] = 'mohamed';
// $users[10] = 'alaa';
$users[3] = 'anton'; // edit value
// print_r($users);

# associative array => array with string unique keys => element[key,value]
$product = [
    'id'=>5,
   
    'price'=>5000,
    'status'=>true,
    // 'name'=>'laptop x'
    'name'=>'laptop',
];


// get value
// echo $product['name'];
// print_r($product);
// set value 
$product['code'] = 12345;
// print_r($product);
$product['price'] = 7000; // edit value
// print_r($product);


# object => datatype => element[property,value]

$productObject = (object)[
    'id'=>5,
    'price'=>5000,
    'status'=>true,
    'name'=>'laptop',
];

// get value 
// echo $productObject->name;
// set value
$productObject->code = 12345;
// edit value
$productObject->id = 10;

print_r($productObject);



