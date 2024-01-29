<?php 
session_start();
//  $_SESSION = array();
 var_dump($_SESSION);
    
    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == TRUE) {
        header("Location: home.php");
    } else {
        $_SESSION['logged_in'] = TRUE;
        $_SESSION['id'] = 1;
    }
?>