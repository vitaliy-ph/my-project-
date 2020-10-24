




$message = htmlspecialchars(trim($_POST['post_message'] ?? ''));
$_SESSION['message'] = $message;
$errors = [];

if (!preg_match('/^[A-ZА-Я]+$/iu', $message)) {
    $errors[] = 'usernameValidationError';
}

if (!$message) {
    $errors[] = 'emptyMessage';
}

/* Для тих, хто хоче збагатитися новими словами - welcome */
$obsceneWordsArray = require_once(__DIR__ . '/bad words.php');
$obsceneWords = implode(')|(', $obsceneWordsArray);

if (preg_match("/({$obsceneWords})/iu", $message)) {
    $errors[] = 'messageValidationError';
}

if ($errors) {
    $errors = implode('&', $errors);
    changeLocation("{$redirectBase}?{$errors}");
}

$postsData = file_get_contents(__DIR__ . '/posts-pivot-base.json');
$postsExist = strlen($postsData) > 0;
$postDataArray = $postsExist ? json_decode($postsData, true) : [];
$recordId = $postsExist ? max(array_keys($postDataArray)) + 1 : 1;




$_SESSION['success'] = true;
changeLocation("{$redirectBase}?success");