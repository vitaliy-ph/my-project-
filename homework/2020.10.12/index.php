<?php


error_reporting(E_ALL);

if (1 > 0) {
    echo '<h1>Task manager</h1>';


}
$info = [
    [
        'task id' => 1,
        'task title' => 'create arrays',
        'task description' => 'create an array with groups for the next session',
        'task owner' => 'Homer Simpson',
        'task deadline' => '18.10.2020, 18:20',
        'task status' => ' done ',

    ],
    [
        'task id' => 2,
        'task title' => 'output an array with the function',
        'task description' => 'output an array using the for and foreach functions',
        'task owner' => 'Bart Simpson',
        'task deadline' => '22.10.2020, 12:54',
        'task status' => ' in process',
    ],

];

?>


<table>
    <tr>
        <th>task id</th>
        <th>task title</th>
        <th>task owner</th>
        <th>task description</th>
        <th>task deadline</th>
        <th>task status</th>
    </tr>

    <?php
    foreach ($info as $element) {
        echo "<tr>
            <td>{$element['task id']}</td>
            <td>{$element['task title']}</td>
            <td>{$element['task owner']}</td>
            <td>{$element['task description']}</td>
            <td>{$element['task deadline']}</td>
            <td>{$element['task status']}</td>
            </tr>";
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




