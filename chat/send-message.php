<?php


$nickname = $_POST['nickname'] ?? null;
$name = $_POST['name'] ?? null;
$surname = $_POST['surname'] ?? null;
$message = $_POST['message'] ?? null;

if (!$nickname || !$message) {
    exit('Nickname and message are required');
}
$data = [
    'nickname' => $nickname,
    'name' => $name,
    'surname' => $surname,
    'message' => nl2br($message),
    'time' => date('Y-m-d H:i:s')
];

try {
    $content = json_encode($data, JSON_THROW_ON_ERROR) . PHP_EOL;
} catch (JsonException $e) {
}
file_put_contents(__DIR__ . '/storage', $content, FILE_APPEND);


header('location: /chat/');
exit;
