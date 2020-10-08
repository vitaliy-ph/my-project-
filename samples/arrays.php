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


//var_dump($groups[1]['name'],
 //   $groups[1]['students'][1]['name']
//);

$groups[1] ['students'] [1] = [
    'name' => 'peter griffin',
    'age' => 50,
];

//$groups[0] = 1;


//var_dump($groups);

$string = 'Hello World';

//var_dump($string[2]);

$students = $groups [0] ['students'];


usort($students,static function (array $a, array $b) {
//  return $b['age'] <=> $a['age'];
});

//var_dump(count($groups));

//var_dump($students);

$a3start = array_shift($a3);
$a3_0 = $a3 [0];
unset($a3[0]);
//var_dump($a3start, $a3, $a3_0, array_key_exists(0, $a3),in_array('lada',$a3));

//array_unique уникальные эллементы

////////////////////// home work/////////////////////////

$a20 = 'Task manager';

var_dump($a20);

$info  = [

    'task id' => 666,
    'task title' => 'create arrays',
    'task description' => 'create an array with groups for the next session',
    'task owner' => 'Homer Simpson',
    'task deadline' => '18.10.2020, 18:20',
    'task status' => 'done',
];

//var_dump($info);

$info2 = [

    'task id' => 666,
    'task title' => 'create arrays',
    'task description' => 'create an array with groups for the next session',
    'task owner' => 'Homer Simpson', 'Bart Simpson',
    'task deadline' => '18.10.2020, 18:20',
];

$group = [
    [
        'task status',
    ],
    [
        'task owner' => 'Homer Simpson',
        'task status' => 'done',
    ],
    [
        'task owner' => 'bart Simpson',
        'task status' => 'not executed',
    ]
];


//var_dump($info2, $group);