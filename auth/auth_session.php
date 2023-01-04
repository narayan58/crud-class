<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        $baseUrl = "http://localhost/crud-class";
        header("Location: $baseUrl/auth/login.php");
        exit();
    }
?>