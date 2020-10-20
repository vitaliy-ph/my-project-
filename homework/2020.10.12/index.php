<?php

/// FOREACH

/*$info = [

    'task id' => 666,
    'task title' => 'create arrays',
    'task description' => 'create an array with groups for the next session',
    'task owner' => [
        'name one' => 'Homer Simpson',
        'name two' => 'Bart Simpson',
    ] ,
    'task deadline' => '18.10.2020, 18:20',
    'task status' => [
        'Homer Simpson' => 'done',
        'Bart Simpson' => 'in process',
    ],
];


foreach($info as $key => $value) {
    echo "{$key}: {$value}", PHP_EOL;
}*/





//////таблица



if (1 > 0) {
    echo '<h1>Task manager</h1>';
}
$info = [

    'task id' => 666,
    'task title' => 'create arrays',
    'task description' => 'create an array with groups for the next session',
    'task owner: one' => 'Homer Simpson',
    'task owner: two' =>    'Bart Simpson',
    'task deadline' => '18.10.2020, 18:20',
    'task status: Homer Simpson ' => 'done',
    'task status: Bart Simpson' => 'in process',

];


?>
<table class="Task manager" style="width:50%"

<?php
foreach($info as $key => $value) {
    echo '<tr>';
    echo '<td>' . $key . '</td>';
    echo '<td>' . ($value) . '</td>';
    echo '<tr>';
}
?>
</table>



<style>
    table, th, td {
        border: 1px solid #000000;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
    }
</style>




