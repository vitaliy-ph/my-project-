<?php
if (!file_exists(__DIR__ . '/bad words.php'))

$message = htmlspecialchars(trim($_POST['post_message'] ?? ''));

if( file_exists('bad words.php')) {
    $badwordsArrays = include_once('bad words.php');
    $badwords = inplode(')|(', $badwordsArrays);
    if (preg_match("/({$badwords})/iu", $message)) {
        $error[] = 'messageValidationError';
    }

} else {
    $error[] = 'messageValidationError';
}
