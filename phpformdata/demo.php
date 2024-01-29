<?php 
    session_start();
    var_dump($_SESSION);
    // $_SESSION = array();
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 1;
    } else {
        $_SESSION['counter'] = $_SESSION['counter']+1;
    }
?>
<html>
    <head>
        <title>Counter Page</title>
        <style>
            h1,h2{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>You visited this website</h1>
        <h2><?= $_SESSION['counter']?> Times</h2>
    </body>
</html>