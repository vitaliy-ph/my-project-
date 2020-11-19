<?php

$nickname = $_POST['nickname'] ?? null;
$name = $_POST['name'] ?? null;
$surname = $_POST['surname'] ?? null;
$message = $_POST['message'] ?? null;


$badWords = array(
    'fuck', 'asshole', 'мразь','тварь','мудак','лох',
    'а' => ['а', 'a', '@'],
    'б' => ['б', '6', 'b'],
    'в' => ['в', 'b', 'v'],
    'г' => ['г', 'r', 'g'],
    'д' => ['д', 'd', 'g'],
    'е' => ['е', 'e'],
    'ё' => ['ё', 'е', 'e'],
    'ж' => ['ж', 'zh', '*'],
    'з' => ['з', '3', 'z'],
    'и' => ['и', 'u', 'i'],
    'й' => ['й', 'u', 'y', 'i'],
    'к' => ['к', 'k', 'i{', '|{'],
    'л' => ['л', 'l', 'ji'],
    'м' => ['м', 'm'],
    'н' => ['н', 'h', 'n'],
    'о' => ['о', 'o', '0'],
    'п' => ['п', 'n', 'p'],
    'р' => ['р', 'r', 'p'],
    'с' => ['с', 'c', 's'],
    'т' => ['т', 'm', 't'],
    'у' => ['у', 'y', 'u'],
    'ф' => ['ф', 'f'],
    'х' => ['х', 'x', 'h', 'к', 'k'],
    'ц' => ['ц', 'c'],
    'ч' => ['ч', 'ch'],
    'ш' => ['ш', 'sh'],
    'щ' => ['щ', 'sch'],
    'ь' => ['ь', 'b'],
    'ы' => ['ы', 'bi'],
    'ъ' => ['ъ'],
    'э' => ['э', 'е', 'e'],
    'ю' => ['ю', 'io'],
    'я' => ['я', 'ya'],
);

$replace = '****';

$message = str_replace($badWords, $replace, $message);

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


header('location: /homework/chat homework/index.php');
exit;
