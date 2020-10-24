<?php

///////////////////////////////////////////powerNum




/*function powerNum(int $number, int $pow): int
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
var_dump($powRecursive);*/




////////////////////////////////////////print_r

/*$Hm = [
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

print_r($Hm);*/


////////////////////////////analog print_r (recursions)

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
///////////////////////////////////////////////////ALL ELEMENTS

echo
"<br> 
all elements of the array: ". count($Hm,COUNT_RECURSIVE);







///////////////////////////analog print_r (recursions) №2

/*$Hm = [
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

echo tree($Hm);

function tree($array, $tab = '', $result = '')
{
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result .= "{$tab}[$key]<br>";
            $result .= tree($value, $tab . str_repeat('&nbsp;', 4));
        } else {
            $result .= "{$tab}[$key] => <b>$value</b><br>";
        }
    }
    return $result;
}*/






//////////////////////////////////////////////////////////////arrayCountRecursive

/*function arrayCountRecursive(array $dataArray, bool $countParent = true): int
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


$countWithParents = arrayCountRecursive($Hm, true);
echo "
<br>
all elements of the array - {$countWithParents}";*/




////////////////////////////////////////////////////

