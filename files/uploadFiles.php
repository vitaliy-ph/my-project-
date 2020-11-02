<?php

$config = require __DIR__ . '/security.php';

$attachment = isset($_FILES['attachment']) ? reArrayFiles($_FILES['attachment']) : null;
$baseInsideDir = $_POST['baseDir'] ?? '';

if (!$attachment) {
    exit('Uploading can not be completed');
}

$config = require __DIR__ . '/config.php';

$dir = sprintf(
    '%s/%s',
    rtrim($config['baseDir'], '/'),
    rtrim($baseInsideDir, '/')
);


foreach ($attachment as $attach) {

    $rout = sprintf(
        '%s/%s',
        $dir,
        trim($attach['name'])
    );
    move_uploaded_file($attach['tmp_name'], $rout);
}

header("Location: index.php?rout={$baseInsideDir}");
exit;


function reArrayFiles(array $filePost) : array
{
    $fileArray = [];
    $fileCount = count($filePost['name']);
    $fileKeys = array_keys($filePost);

    for ($i = 0; $i < $fileCount; $i++) {
        foreach ($fileKeys as $key) {
            $fileArray[$i][$key] = $filePost[$key][$i];
        }
    }

    return $fileArray;
}



