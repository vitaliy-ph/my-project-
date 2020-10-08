<?php

echo 'hello world', PHP_EOL;


$menu = [
    [
        'title' => 'Samples',
        'children' => [

            [
                'url' => '/',
                'title' => 'home',
            ],
            [
                'url' => '/samples/arrays.php',
                'title' => 'arrays',
            ],
            [
                'url' => '/samples/branching.php',
                'title' => 'branching',
            ],
            [
                'url' => '/samples/basics.php',
                'title' => 'Basics',
            ],
            [
                'url' => '/samples/html.php',
                'title' => 'html',
            ],
            [
                'url' => '/samples/math.php',
                'title' => 'math',
            ],
            [
                'url' => '/samples/types.php',
                'title' => 'types',
            ],
        ]
    ]
];

var_dump($menu);