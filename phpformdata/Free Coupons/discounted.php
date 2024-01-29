<?php 
    session_start();
    var_dump($_SESSION);
    // $_SESSION = array();
    if (isset($_SESSION["done"]) && $_SESSION["done"] == TRUE) {
        // header("Location: discounted.php");
        echo "dsd";
        $_SESSION = array();
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
