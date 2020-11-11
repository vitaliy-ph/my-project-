<?php


if (1 > 0) {
    echo '<h1>Task manager</h1>';
}

$info  = [

    'task id' => 3323,
    'task title' => 'create a project in PHP',
    'task description' => 'create a project using arrays of loops and functions',
    'task owner' => 'Homer Simpson',
    'task deadline' => '18.10.2020, 18:20',
    'task status' => 'done',
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

<!--if (1 > 0) {
echo '<h1>TEST</h1>';
}

?>

<ul>
    <li>Test 1</li>
    <li>Test 2</li>
    <li>Test 3</li>
    <?php /*if (isset($_GET['p1']) && $_GET['p1'] % 2 === 0) : */?>
        <li>Test 4</li>
    <?php /*endif; */?>
</ul>
-->