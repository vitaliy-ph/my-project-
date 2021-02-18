<?php

error_reporting(E_ALL);

$baseInsideDir = $_POST['baseDir'] ?? null;
$name = $_POST['name'] ?? null;

if (!$baseInsideDir || !$name) {
    exit('Dir and name are required');
}

$config = require __DIR__ . '/config.php';

$rout = sprintf(
    '%s/%s/%s',
    rtrim($config['baseDir'], '/'),
    rtrim($baseInsideDir, '/'),
    trim($name)
);

if (!mkdir($rout) && !is_dir($rout)) {
    exit(sprintf('Directory "%s" was not created', $rout));
}

header("Location: IndexMess.php?rout={$baseInsideDir}");
exit;

$file_name = "file.docx";

header("Content-Length: " . filesize($file_name));

header("Content-Disposition: attachment; filename=" . $file_name);

header("Content-Type: application/x-force-download; name=\"" . $file_name . "\"");
