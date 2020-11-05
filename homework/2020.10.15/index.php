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


echo '<br>';

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

$Hm = [
    1 => [
        'country' => 'Ukraine',
        'city' => 'Kiev',
        'date' => '19 september',
        'time' => '14:29'
    ],
    2 => [
        'country ' => 'Russia',
        'city' => 'Moscow',
        'date' => '4 december',
        'time' => '17:11'
    ],
    3 => [
        'country ' => 'USA',
        'city' => 'Washington',
        'date' => '25 August',
        'time' => '19:44'
    ]
];

$countWithoutParents = arrayCountRecursive($Hm, false);
$countWithParents = arrayCountRecursive($Hm, true);


echo "not all elements of the array: {$countWithoutParents}<br>
      all elements of the array: {$countWithParents}";

