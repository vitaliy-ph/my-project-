<?php


$info = [

    'task id' => 666,
    'task title' => 'create arrays',
    'task description' => 'create an array with groups for the next session',
    'task owner' => [
        'name 1' => 'Homer Simpson',
        'name 2' => 'Bart Simpson',
    ] ,
    'task deadline' => '18.10.2020, 18:20',
    'task status' => [
        'Homer Simpson' => 'done',
        'Bart Simpson' => 'in process',
    ],
];

var_dump($info);