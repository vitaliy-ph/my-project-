<?php

error_reporting(E_ALL);

$config = require __DIR__ . '/config.php';

require_once __DIR__ . '/../files/security.php';
require_once __DIR__ . '/../files/visit.php';

$baseDir = rtrim($config['baseDir'], '/');
$webRout = rtrim($config['webRout'], '/');

$actualRout = $baseDir;

$rout = ltrim($_GET['rout'] ?? '', '/');
if ($rout) {
    $actualRout = realpath("{$baseDir}/{$rout}");
}

$actualDir = $actualRout;
$actualInsideRout = ltrim(str_replace($baseDir, '', $actualRout), '/');



if (mb_strlen($actualDir) < mb_strlen($baseDir)) {
    exit('Directory is not accessed');
}

$content = 'File not selected';
if (is_file($actualRout)) {
    $mimeType = mime_content_type($actualRout);
    switch ($mimeType) {
        case 'image/jpeg':
        case 'image/png':
            $content = "<img src='{$webRout}/{$rout}' alt='Image' width='100%'>";
            break;
        case 'text/plain':
            $content = nl2br(file_get_contents($actualRout));
            break;
        default:
            $content = <<<HTML
                File {$rout} can not be processed<br>
                Try to <a class="button28" href="downloadFile.php?rout={$rout}" target="_blank">download</a>
            HTML;
    }

    $actualDir = dirname($actualRout);
    $actualInsideRout = dirname($actualInsideRout);
}


$dirData = scandir($actualDir);
if (rtrim($actualDir, '/') === $baseDir) {
    $dirData = array_filter($dirData, static function (string $item) {
        return !in_array($item, ['.', '..']);
    });
}

$breadcrumbs = explode('/',   $actualInsideRout);
?>
<!doctype html>
<html lang="en">
<head>
    <style>
        <?php echo file_get_contents("style.css"); ?>
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table  width="100%"  cellpadding="10">
    <tr>
        <td class="breadcrumb">
            <a href="/homework/fileManager/files/?rout=/">Home</a>
            <?php foreach ($breadcrumbs as $dirRout):?>
                <?php
                $exp = '';
                $count = 0;
                while($breadcrumbs[$count] !== $dirRout) {
                    $exp .= $breadcrumbs[$count] . '/';
                    $count++;
                }
                $trim = rtrim($exp, '/');
                ?>
                <a href="?rout=<?= "{$trim}/{$dirRout}"?>"><?= $dirRout ?></a>
            <?php endforeach; ?>
        </td>
        <td>
            <a class="button28" href="signOut.php" style="float: right">Sign Out</a>
        </td>
    </tr>
    <tr>
        <td class="creat" width="30%" valign="top">
            <form action="createDir.php" method="post">
                <input name="baseDir" value="<?= $actualInsideRout ?>" type="hidden">
                <input name="name" type="text">
                <button class="button27"  type="submit">Create Dir</button>
            </form>
            <hr color="#F56433">
            <form action="uploadFiles.php" method="post" enctype="multipart/form-data">
                <input name="baseDir" value="<?= $actualInsideRout ?>" type="hidden">
                <input   name="attachment[]" type="file" multiple="multiple" max="2">
                <button class="button27"  type="submit">Upload</button>
            </form>

            <hr color="#F56433">
            <ul class="text">
            <?php foreach ($dirData as $dirRout) : ?>
                <form action="deleteDir.php" method = "post">
                    <li>
                        <a  style="margin-right: 10px"  href="?rout=<?="{$actualInsideRout}/{$dirRout}"?>"><?= $dirRout ?></a>
                        <input name="actualInsideRout" value="<?= $actualInsideRout ?>" type="hidden">
                        <input name="deleteDir" value="<?= $dirRout ?>" type="hidden">
                        <?php if($dirRout !== '..') : ?>

                            <button class="button25" type="submit" >Delete</button>
                        <?php endif; ?>
                    </li>
                </form>
            <?php endforeach; ?>
            </ul>
        </td>
        <td valign="top">
            <?= $content ?>
        </td>
    </tr>
    <tr>

    </tr>
</table>
</body>
</html>

