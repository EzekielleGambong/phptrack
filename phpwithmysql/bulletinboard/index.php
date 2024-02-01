<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Announcement</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="process.php" method="post">
        <label for="announcement">Announcement:</label>
        <input type="text" name="announcement" required>
        <br>
        <label for="date">Date (mm/dd/yyyy):</label>
        <input type="text" name="date" required>
        <br>
        <input type="submit" name="add" value="Add">
        <input type="submit" name="skip" formaction="main.php" value="Skip">
    </form>
</body>
</html>
