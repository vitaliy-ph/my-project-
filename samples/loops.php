<?php



//for ($i = 0; $i < 10; $i++) {
//var_dump($i);
//}

//$k = 0;

//for (; $k < 2; $k++) {
    //   var_dump($k);               //&&
    // $k++;
//}

//$i = 5;
//while ($i > 0) {
 //   var_dump($i);
 //   $i--;
//}

//$i = 0;
//do {
//    //var_dump($i);
//} while ($i > 0);


//while (true) {
//var_dump(date('H:i:s'));    бесконечный цикл не запускать в браузере
//sleep(1);
//}


//царь циклов


/*    $groups = [
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

foreach ($groups as $key => $value) {
    echo "#{$value['id']}: {$value['name']}", PHP_EOL;
};*/


//$a = [
 //   'type' =>'smartphone',
//    'mark' => 'samsung galaxy s 20',
 //   'color' => 'red',
//    'memory' => '120gb',
//];

///foreach($a as $key => $value) {
///     echo "{$key}: {$value}", PHP_EOL;
//}

//unset($value);
////////////////////////удаление сылки
//var_dump($a);

//for ($i = 0; $i<10; $i++) {
 //   if($i % 2 !== 0) {
 //       continue;
 //   }

 //   if ($i === 5 || $i === 6) {
//        break;
//    }


//    var_dump($i);
//}

/*for ($column = 0; $column <= 10; $column++) {
    for ($row = 0; $row <= 10; $row++) {
        $result = $column * $row;
         echo "{$column} * {$row} = {$result}", PHP_EOL;
    }
    echo PHP_EOL;

}*/

/////////////Home Work/////////////
///FOREACH

$info  = [

    'task id' => 3323,
    'task title' => 'create a project in PHP',
    'task description' => 'create a project using arrays of loops and functions',
    'task owner' => 'Homer Simpson',
    'task deadline' => '18.10.2020, 18:20',
    'task status' => 'done',
];

foreach($info as $key => $value) {
    echo "{$key}: {$value}", PHP_EOL;
}

//FOR

$info = [

    'task id' => 3323,
    'task title' => 'create a project in PHP',
    'task description' => 'create a project using arrays of loops and functions',
    'task owner' => 'Homer Simpson',
    'task deadline' => '18.10.2020, 18:20',
    'task status' => 'done',
];


for($i = 0; $i < 1; $i++) {

    var_dump($info);
}


/*$count = count($info);
for ($counter.txt = 0; $counter.txt < $count; $counter.txt++) {
    print 'task id' .$info[$counter.txt]['name']. '3323' .$info[$counter.txt]['id'];
}*/


