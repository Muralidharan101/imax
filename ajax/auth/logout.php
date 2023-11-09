<?php
    session_start();

    setcookie("imax_login_user_phone", "", time() - 3600, "/");
    setcookie("imax_login_user_id", "", time() - 3600, "/");

    session_destroy();

    header("Location: ../../index.php");
    exit;
?>