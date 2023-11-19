<?php
    session_start();
    if(!isset($_SESSION["logged"]) || $_SESSION["logged"] != "check") {
        header("Location: login.php");
        exit();
    }
?>