<?php

$a1 = ['test', 'qwerty', 123];
$a2 = [2 =>'test',4 => 'qwerty', 123];
$a3 = [
    'auto' => 'class',
    'color' => 'red',
    'car' => 'lada',
    'betal150',
];
$groups = [
    [
       'id' => 1,
       'name' => 'PHP basics',
        'students' => [
            [
                'name' => 'bender',
                'age' => 22,
            ],
            [
                'name' => 'bart',
                'age' => 19,
            ],
            [
                'name' => 'homer',
                'age' => 70,
            ],
        ],

    ],
    [
        'id' => 2,
        'name' => 'js basics',
        'students' => [
            [
                'name' => 'marge',
                'age' => 90,
            ],
            [
                'name' => 'flanders',
                'age' => 31,
            ],
        ],
    ],

];


//var_dump(
//    $groups[1]['name'],
 //   $groups[1]['students'][1]['name']
//);

$groups[1] ['students'] [1] = [
    'name' => 'peter griffin',
    'age' => 50,
];

//$groups[0] = 1;


//var_dump($groups);
