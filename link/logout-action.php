<?php
    session_name('ta_webasset');
    session_start();
    session_destroy();
    header("location:login.php");
?>