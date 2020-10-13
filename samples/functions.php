<?php

declare(strict_types =1);
error_reporting(E_ALL);



/**
 * @param string $name
 * @param string $result
 */

function printName(string $name, string $result = 'PHP')
{
    $function = __FUNCTION__;
    echo "{$name} + {$function} = {$result}", PHP_EOL;

}
printName('betal','PHP');
printName('homer','lox');
//printName(123);