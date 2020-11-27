<?php

session_start();

$isGuest = !isset($_SESSION['user']);

if($isGuest) {
    require __DIR__ . '/views2/AUTH-FORM.php';
    exit;

}
