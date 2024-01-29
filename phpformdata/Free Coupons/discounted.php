<?php 
    session_start();
    var_dump($_SESSION);
    // $_SESSION = array();
    
    if (isset($_SESSION["done"]) && $_SESSION["done"] == TRUE) {
        // $_SESSION = array();
    } elseif (isset($_SESSION["reset"]) && $_SESSION["reset"] == TRUE){

    } else {
        if (!isset($_SESSION['counter'])) {
            $_SESSION['counter'] = 1;
        } else {
            if($_SESSION['counter'] == 9){
                $_SESSION['done'] = TRUE;
                
            } else {
                $_SESSION['counter'] = $_SESSION['counter']+1;
                
            }
        }
    }
    header("Location: index.php");
?>
