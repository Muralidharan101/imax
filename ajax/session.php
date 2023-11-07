<?php
    require_once 'datab.php';
    $cookie_name = "imax_login_user_phone";

    if (!isset($_COOKIE[$cookie_name])) {
        header("Location: register.php");
        exit;
    }
?>