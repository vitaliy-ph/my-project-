<?php

error_reporting(E_ALL);

$number = (int)$_GET['p1'];

$x = true;
if ($x == 1) {
    echo 1;
}
if ($x == 2) {
    echo 2;
}
if ($x == 3) {
    echo 3;
}

///////
$number = (int)$_GET['p1'];

 echo $number === 0 ?'Number is zero' :
     ($number < 0 ? 'Number is zero' : ($number === 1 ? 'Number is one' :
         ($number === 2 ? 'Number is two' :
             ($number % 2 === 0 ? "Number {$number} is even" :
                 "Number {$number} is odd"))));