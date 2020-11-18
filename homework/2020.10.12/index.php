<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Homework</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
</head>
<body>
<h4>FOREACH</h4>
</body>
</html>

<style>
    table, th, td {
        margin: 10px;
        border: 1px solid #000000;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
    }
</style>

<?php


error_reporting(E_ALL);


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


echo '<table border="1px">';
foreach ($info as $task => $element) {
    foreach ($element as $key => $value)
        echo "<tr><th>$key</th> <td>$value</td></tr>";
}



