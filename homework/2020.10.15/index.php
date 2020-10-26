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

function show_arr($Hm,$i='')
{
    foreach($Hm as $key => $value)
    {
        echo $i . "[". $key ."] => ";

        if (is_array($value))
        {

            echo  "Array\n";
            show_arr($value,$i.="\t");
        }
        else
        {echo $value."\n";}

    }
}
show_arr($Hm);



////////////// all element array
function countArray($array)
{
    foreach ($array as $value) {
        $count = 1 + $count;
        if (is_array($value)) {
            $count = countArray($value) + $count;
        }
    }
    return $count;
}

echo
    "<br> 
all elements of the array: ". countArray($Hm);




