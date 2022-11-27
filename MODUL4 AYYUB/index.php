<?php 

session_start();

if ( isset($_COOKIE['login'])) {
    if ( $_COOKIE['login'] == 'true') {
        $_SESSION['login'] == true;
    }
}

if ( !isset($_SESSION['login'])) {
    header("Location: pages/Home-NoLogin-Ayyub.php");
    exit;
}

require 'pages/Home-Ayyub.php'; 

?>