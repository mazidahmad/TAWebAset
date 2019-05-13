<?php
    session_name('ta_webasset');
    session_start();
    if(!isset($_SESSION["username"]) && !isset($_SESSION["password"])){
        header("location:link/login.php");
    }
?>
index page