<?php

session_start();

$isGuest = !isset($_SESSION['user']);

if($isGuest) {
    require __DIR__ . '/../files/views/auth-form.php';
    exit;
}
