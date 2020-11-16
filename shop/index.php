<?php

error_reporting(E_ALL);

$config = require __DIR__ . '/config.php';



require_once __DIR__ . '/SECUR.php';
require_once __DIR__ . '/lib/dispatcher.php';
require_once __DIR__ . '/lib/db.php';



setDb($config);

dispatch($_SERVER['REQUEST_URI'], $config);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
<td>
    <a href="SIGN-OUT.php" style="float: right">Sign Out</a>
</td>
</table>
</body>
</html>
