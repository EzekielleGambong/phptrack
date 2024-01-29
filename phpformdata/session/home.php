<?php 
session_start();
    // $_SESSION = array();
    var_dump($_SESSION);
    
    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == TRUE) {
        echo "Hello";
    } else {
        header("Location: login.php");
    }
    
?>