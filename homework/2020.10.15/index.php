<?php

///////////////////////////////////////////powerNum
function powerNum(int $number, int $pow): int
{
    if ($pow === 0) {
        return 1;
    }
    if ($pow % 2 === 0) {
        $pNumber = powerNum($number, $pow/2);
        return $pNumber * $pNumber;
    } else {
        return $number * powerNum($number, $pow - 1);
    }
}
 $powRecursive = powerNum(4,3);
var_dump($powRecursive);





////////////////////////////analog (recursions)
echo '<br>';

$a = [
    0 => 1,
    1 => 3,
    4 => [
        0 => 1,
        1 => 5,
    ],
];
echo tree($a);
function tree($array, $tab = '', $result = '')
{
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result .= "{$tab}[$key]<br>";
            $result .= tree($value, $tab . str_repeat('&nbsp;', 7));
        } else {
            $result .= "{$tab}[$key] => $value<br>";
        }
    }
    return $result;

}




/////////////////////////////////////либо
echo'<br>';

function printArray($a, $key = null, $pad = 3)
{
    if (empty($key)) {
        echo str_pad('', $pad - 3, ' ', STR_PAD_LEFT) . "Array", PHP_EOL;
    } else {
        echo str_pad('', $pad - 6, ' ', STR_PAD_LEFT) . "[$key] => Array \r\n";
    }
    echo str_pad('', $pad - 3, ' ', STR_PAD_LEFT) . "{ \r\n";
    foreach ($a as $key => $value) {
        if (is_array($value)) {
            printArray($value, $key, $pad + 6);
        } else {
            echo str_pad('', $pad, ' ', STR_PAD_LEFT) . "[$key] => $value \r\n";
        }
    }
    echo str_pad('', $pad - 3, ' ', STR_PAD_LEFT) . "} \r\n";
}

printArray($a);
/////////////////////////////////////////////////////ALL ELEMENTS
/*echo
    "<br>
all elements of the array: ". count($a,COUNT_RECURSIVE);
echo '<br>';*/






///////////////////////////////////////////////////array count
function arrayCountRecursive(array $dataArray, bool $countParent = true): int
{
    $elementsCount = count($dataArray);
    foreach ($dataArray as $element) {
        if (is_array($element)) {
            if (!$countParent) {
                $elementsCount--;
            }
            $elementsCount += arrayCountRecursive($element, $countParent);
        }
    }
    return $elementsCount;
}
$a = [
    0 => 1,
    1 => 3,
    4 => [
        0 => 1,
        1 => 5,
    ],
];


$countWithoutParents = arrayCountRecursive($a, false);
$countWithParents = arrayCountRecursive($a, true);


echo "not all elements of the array: {$countWithoutParents}<br>
      all elements of the array: {$countWithParents}";

