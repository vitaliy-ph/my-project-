<?php

session_status();

$isGuest = !isset($_SESSION['user']);

if($isGuest) {
    require __DIR__ . '/views2/AUTH-FORM.php';
    exit;

}
