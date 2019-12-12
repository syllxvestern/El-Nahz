<?php

session_start();

if(isset($_SESSION['username'])){

    session_unset();
    session_destroy();
    header("Location: home.php");
    }

if(isset($_SESSION['email'])){


session_unset();
session_destroy();
header("Location: home.php");
}
?>