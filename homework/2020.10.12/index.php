<h4>FOREACH and FOR</h4>
<?php

error_reporting(E_ALL);


$info = [
    [
        'task id' => 1,
        'task title' => 'create arrays',
        'task description' => 'create an array with groups for the next session',
        'task owner' => 'Homer Simpson',
        'task deadline' => '18.10.2020, 18:20',
        'task status' => 'done',

    ],
    [
        'task id' => 2,
        'task title' => 'output an array with the function',
        'task description' => 'output an array using the for and foreach functions',
        'task owner' => 'Bart Simpson',
        'task deadline' => '22.10.2020, 12:54',
        'task status' => 'in process',
    ],

];




echo '<table border="1px">';
foreach ($info as $task ) {
    foreach ($task as $key => $value)
        echo "<tr><th>$key</th>  <td>$value</td></tr>";
}

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
   for ($i = 0; $i < 2; $i++) {
        echo "<tr>
            <td>{$info[$i]['task id']}</td>
            <td>{$info[$i]['task title']}</td>
            <td>{$info[$i]['task owner']}</td>
            <td>{$info[$i]['task description']}</td>
            <td>{$info[$i]['task deadline']}</td>
            <td>{$info[$i]['task status']}</td>
            </tr>";
    }
?>
</table>
</body>
</html>

<style>
    table, th, td {
        margin: 10px;
        border: 1px solid #000000;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
    }
</style>







