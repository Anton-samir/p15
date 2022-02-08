<?php
# 2 level
// $user = [
//     'id'=>5,
//     'name'=>'ahmed',
//     'activities'=>[
//         'football',
//         'gym'
//         ]
// ];
// echo($user['activities'][1]) ;


// 3 level 
$users = [
    [
        'id' => 5,
        'name' => 'ahmed',
        'activities' => [
            'football',
            'gym'
        ]
    ],
    [
        'id' => 6,
        'name' => 'galal',
        'activities' => [
            'reading',
            'gym'
        ]
    ]
];
echo $users[1]['name'] . ' activities\'s : ' . $users[1]['activities'][0] . ',' . $users[1]['activities'][1];