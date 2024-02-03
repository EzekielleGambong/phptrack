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
var_dump($_SESSION);
?>
<div class="container">
    <a href="form.php">Sign in</a>';
    <p><?= $_SESSION['userName']; ?></p>
    <?php include('display_reviews.php'); ?>
    <?php
    
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == TRUE) {
            
            include('post_review_form.php');
        }
    ?>

    <!-- <form action="register.php" method="post">
        <textarea name="postReviewText" id="postReviewText" cols="30" rows="10"></textarea>
        <input type="submit">
    </form> -->
    <!-- Display Reviews -->
    <!-- <?php include('display_reviews.php'); ?> -->

    <!-- Login Form -->
    <!-- <?php include('login_form.php'); ?> -->

    <!-- Post Review Form -->
    <!-- <?php include('post_review_form.php'); ?> -->

    <!-- Reply Form -->
    <!-- <?php include('reply_form.php'); ?> -->
    </div>
    

    
</div>

</body>
</html>
