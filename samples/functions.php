<?php



/*$global ='123';
function globalFunction()
{

    $function = 111;
    var_dump('inside>>>' . $GLOBALS,['$global']);    не использовать


    $GLOBALS['global'] = mt_rand();

}

globalFunction();*/

//var_dump($global, $functionVar);

///////важная
/*$var =123;
function globalFunction($var)
{
    var_dump('inside >>>' . $var);
    $var = mt_rand();
}

globalFunction($var);

var_dump('outside>>>' . $var);*/


/*$global = 334;
function globalFunction($global){

}

$globalFunction2 = static function () use ($global) {
    var_dump('inside2 >>>' . $global);                  //важное
    $global = mt_rand ();
    unset($global);


};

$globalFunction2();
var_dump('outside >>>' . $global);
$globalFunction2();
var_dump('outside >>>' . $global);*/




//$globalFunction2();
//var_dump('outside 2 >>>' . $global);

/*function linkedFunc(&$link)
{
    var_dump('inside >>>' . $link);
    $link = mt_rand();
    unset($link);
}*/

/*linkedFunc($global);
var_dump('outside >>>' . $global);*/

/*function returnFunction ($arg)
{
    var_dump('inside >>> '. $arg );
    $arg = mt_rand();
    return $arg;
}

$global = returnFunction($global);

var_dump('outside >>> ' . $global);*/


/*function returnFunction (string $arg) : string
{
    var_dump('inside >>> '. $arg );
    $arg = (string)mt_rand();

    return $arg;

}

$global = returnFunction($global);

var_dump('outside >>> ' . $global);*/




/*function sum(int $clientId, int...$numbers): int
{
    var_dump($clientId);
    return array_sum($numbers);
}
$sum = sum(102, 3, 3, 5, 11);
var_dump($sum);*/

//list ($t1, $t2) =[1111, 2222];
//var_dump($t1,$t2);

/////////home work////////////
//print r and recursion print r

/*$Hm = [
    'country one' => 'Ukraine',
    'city' => 'Lviv',
    'date' => '19 september',
    'time' => '14:29'
];

print_r($Hm);*/


// вариант 1



/*function showWay($ways = [1]) {

    $paths = array(
        1 => 3,
        2 => 4,
        3 => 2,
        4 => 5,
        5 => null);

    if($paths[end($ways)] === null) return $ways;
    $ways[] = $paths[end($ways)];
    return showWay($ways);
}

var_dump(showWay());*/



//echo count($Hm);

/// вариант 2

/*$Hm = [
    'country' => 'Ukraine',
    'city' => 'Lviv',
    'date' => '19 september',
    'time' => '14:29'
];


function show_arr($Hm,$i='')
{
    foreach($Hm as $key=>$value)
    {
        echo $i."[".$key."] => ";

        if (is_array($value))
        {

            echo "Array\n";
            show_arr($value,$i.="\t");
        }
        else
        {echo $value."\n";}

    }
}
show_arr($Hm);

//// count

*/

$Hm = [
    'Ukraine'=> [
        'city' => 'Lviv',
        'date' => '19 september',
        'time' => '14:29'
        ],
    'Russia' => [
        'city' => 'Moscow',
        'date' => '24 september',
        'time' => '17:11'

    ],
];
print_r($Hm);

echo "Counts all elements: " . count($Hm,COUNT_RECURSIVE);

echo "Counts  elements: " . count($Hm);







