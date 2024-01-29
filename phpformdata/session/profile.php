<?php 
session_start();
//  $_SESSION = array();
 var_dump($_SESSION);
    
    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] != TRUE) {
        header("Location: login.php");
    } else {
        if ($_SESSION['id'] == 1){
            echo 'Ezi';
        }
        if ($_SESSION['id'] == 2){
            echo 'Tart';
        }
    }
?>