<?php
$categories = [
    'Id' => 1,
    'name' => 'mobiles',
    'subCategories' => [
        'samsung' => [
            (object)[
                'id' => 50,
                'name' => 'NOTE 10',
                'prices' => [5000, 6000],
                'madeIn' => ['china', 'germany'],
                'colors' => ['primary' => 'black', 'secondaryColors' => ['red', 'blue']],
            ], (object)[
                'id' => 60,
                'name' => 'S20',
                'prices' => [7000, 8000],
                'madeIn' => ['china', 'germany'],
                'colors' => ['primary' => 'white', 'secondaryColors' => ['brown', 'orange']],
            ]
        ],
        'apple' => [
            (object)[
                'id' => 70,
                'name' => 'Iphone X',
                'prices' => 20000,
                'madeIn' => (object)['counrty' => 'china'],
                'colors' => ['red', 'green', 'black'],
            ], (object)[
                'id' => 80,
                'name' => 'Iphone 12',
                'prices' => 60000,
                'madeIn' => (object)['counrty' => 'china'],
                'colors' => [
                    (object)['primary' => 'black'],
                    (object)[
                        'secondaryColors' =>
                        [
                            'red',
                            'blue'
                        ]
                    ]
                ],
            ]
        ],
        'oppo' => [
            (object)[
                'id' => 90,
                'name' => 'Oppo F1',
                'prices' => [],
                'madeIn' => [],
                'colors' => [],
            ], (object)[
                'id' => 100,
                'name' => 'Oppo F2',
                'prices' => [],
                'madeIn' => [],
                'colors' => [],
            ]
        ]
    ]
];

// o/p 
// brand : samsung => Note10 , s20 ,
// brand : apple => iphonex , iphone 12
// brand : oppo => oppof1 , oppof2
# solutioin
$message = "";
foreach($categories['subCategories'] AS $brand => $products){
    $message .= "Brand : $brand => ";
    foreach($products AS $index=>$product){
        $message .= $product->name . ' , ';
    }
    $message .= "<br>";
}
// echo $message;



$users = [
    [
        'id'=>5,
        'name'=>'aya',
        'activities'=>[
            'reading','swimming'
        ]
    ],
    [
        'id'=>1,
        'name'=>'sara',
        'activities'=>[
            'football','sss','gym'
        ]
    ]
];
// o/p
// user : id = 5 , name = aya , activities = reading , swimming
// user : id = 1 , name = sara , activities = football , gym ,
// $message = "";
foreach($users AS $user){
    $message = "User : id = " . $user['id'] . " , name = " . $user['name'] . " , activities = ";
    foreach($user['activities'] as $activity ){
        if($activity == 'sss'){
            continue;
        }
        $message .= $activity . ' , ';
    }
    $message .= "<br>";
    echo $message;
}
// echo $message;
?>
