<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
session_start();
// $_SESSION=array();
?>
<div class="container">
    <a href="form.php">Sign in</a>';
    <form action="logout.php" >
            <input type="submit" value="LogOut" >
    </form>
    <p><?= $_SESSION['userName']; ?></p>
    <?php include('display_reviews.php'); ?>
    <?php
    
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == TRUE) {
            
            include('post_review_form.php');
        }
    ?>

    </div>
    

    
</div>

</body>
</html>
