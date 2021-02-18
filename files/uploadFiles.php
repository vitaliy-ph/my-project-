<?php

$config = require __DIR__ . '/security.php';

$attachment = isset($_FILES['attachment'] ) ? reArrayFiles($_FILES['attachment']) : null;
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
        trim($attach['name']));


    if ($attach ['size'] > 3145728) {
        exit('File must be no larger than 3 MB');
    }



    if (($attach ['type'] == "image/jpeg") ||
        ($attach ['type'] == "video/mp4") ||
        ($attach ['type'] == "image/png"))
    {
        move_uploaded_file($attach['tmp_name'], $rout);
    }else{
        exit('The file type must be (image/jpeg, video/mp4, image/png). ');
    }

}


header("Location: IndexMess.php?rout={$baseInsideDir}");
exit;


function reArrayFiles(array $filePost) : array
{

    $fileArray = [];
    $fileCount = count($filePost['name']);
    $fileKeys = array_keys($filePost);
    if ($fileCount > 3) {
        exit('Max files limit 5!');
    }



    for ($i = 0; $i < $fileCount; $i++) {
        foreach ($fileKeys as $key) {
            $fileArray[$i][$key] = $filePost[$key][$i];
        }
    }

    return $fileArray;
}

