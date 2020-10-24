<?php
// вникнуть


$pow = 3 ** 5 ;
var_dump($pow);

function power(int $number, int $power)
{
    if ($power === 0 || $number === 1 ) {
        return 1;
    }

        if ($power === 1 || $number === 0) {
            return  $number;
    }
    return $number * power($number, $power - 1);
}

$powRecursive = power (3,5);
var_dump($powRecursive);


// 1 1 2 3 5 8 13 21 34/// фибаначи




/*function fibonacci(int $n)
{
        static $count = 0;
        $count ++;

        if ($n === 0) {

            return 0;
        }
        if ($n === 1) {

            return 1;
        }

        var_dump($count);

    return fibonacci($n - 2) + fibonacci(($n - 1));

}

$fibonacci = fibonacci(13);
var_dump($fibonacci);*/




$count = 0;                   //важное

function fibonacci(int $n)
{
    static $lib = [];
    global $count;
    $count ++;

    if ($n === 0 ) {
        return 0;
    }
    if ($n === 1 ) {
        return 1;
    }
    if (array_key_exists($n,$lib)) {
        return $lib[$n];
    }

    $index1 = $n -2;
    $number1 = fibonacci($index1);

    $index2 = $n -1;
    $number2 = fibonacci($index2);

        $lib[$index1] = $number1;
        $lib[$index2] = $number2;

    return $number1 + $number1;
}

$fibonacci = fibonacci(10);
var_dump($fibonacci, $count);


/*$count = 0;

function fibonacci(int $n)
{
    global $count;
    $count ++;

    if ($n === 0) {

        return 0;
    }
    if ($n === 1) {

        return 1;
    }



    return fibonacci($n - 2) + fibonacci(($n - 1));

}
$fibonacci = fibonacci(10);
var_dump($fibonacci, $count);*/

