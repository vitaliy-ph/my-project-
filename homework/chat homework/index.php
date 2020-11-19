<?php
$messages = [];

$file = fopen(__DIR__ . '/storage', 'rb');
while ($line = fgets($file, 1024)) {
    try {
        $messages[] = json_decode(trim($line), true, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
    }
}
fclose($file);

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
<form action="/homework/chat homework/send-message.php" method="post">
    <div>
        <label for="nickname">Nickname</label>
        <input type="text" name="nickname" id="nickname"  required>
        <label for="name">Name</label>
        <input type="text" name="name" id="name"  required>
        <label for="surname">Surname</label>
        <input type="text" name="surname" id="surname"  required>

    </div>


    <br>
    <br>
    <label for="message">Message</label>
    <br>
    <textarea name="message" id="message" rows="4" cols="25" required placeholder="не выражаться!"></textarea>

    <br>
    <button type ="submit">Send Message</button>
    <br><br>
</form>

<table  width="100%" border="3">
    <tr>
        <th>Nickname</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Message</th>
        <th>Time</th>
    </tr>
    <?php foreach ($messages as $message) : ?>
        <tr>
            <td><?= $message['nickname']?></td>
            <td><?= $message['name']?></td>
            <td><?= $message['surname']?></td>
            <td><?= $message['message']?></td>
            <td><?= $message['time']?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>