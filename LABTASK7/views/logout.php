<?php

    if (isset($_COOKIE['logged'])) {
        unset($_COOKIE['logged']); 
        setcookie('logged', "", time() - 3600, '/'); 
    }

    if (isset($_COOKIE['login_info'])) {
        unset($_COOKIE['login_info']); 
        setcookie('login_info', "", time() - 3600, '/'); 
    }
    if (isset($_SESSION['logged'])) {
        unset($_SESSION['logged']);
    }
    if (isset($_SESSION['login_info'])) {
        unset($_SESSION['login_info']);
    }

    $_SESSION['message'] = "Logged out !";
    header("location:?route=login");

?>