<?php
error_reporting(E_ALL);
$config = require __DIR__ . '/config.php';
$baseDir = $config['baseDir'];
$actualInsideRout = $_POST['actualInsideRout'];
$deleteDir = $_POST['deleteDir'];

$rout = rtrim($actualInsideRout, '/') . '/' . ltrim($deleteDir, '/');

$pathToDelete = rtrim($baseDir, '/') . '/' . ltrim($rout, '/');


static $count;

if(is_file($pathToDelete)){
    unlink($pathToDelete);
    header("Location: IndexMess.php?rout={$actualInsideRout}");
    exit();
}

while($count !== 1) {
    $count = 0;
    DeleteDir($pathToDelete);
}

header("Location: IndexMess.php?rout={$actualInsideRout}");
exit();




function DeleteDir($dir) {
    global $count;
    $count ++;


    if(dirEmpty($dir)) {
        rmdir($dir);
    } else {
        $actualInsideRout = scandir($dir);
        for($i = 2; $i <= array_key_last($actualInsideRout); $i++){
            DeleteDir($dir . '/' . $actualInsideRout[$i]);
        }
    }
}

function dirEmpty($dir) {
    $hd = opendir($dir);
    while (false !== ($entry = readdir($hd))) {
        if ($entry != "." && $entry != "..") {
            closedir($hd);
            return FALSE;
        }
    }
    closedir($hd);
    return TRUE;
}