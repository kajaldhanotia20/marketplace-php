<?php
    /* Your password */
    $password = 'MYPASS';

    if (empty($_COOKIE['password']) || $_COOKIE['password'] !== $password) {
        // Password not set or incorrect. Send to index.php.
        header('Location: index.php');
        exit;
    }
?>