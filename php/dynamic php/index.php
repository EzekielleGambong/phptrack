<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Images with PHP</title>
</head>
<body>
    <?php
    // Display five images with different ticket numbers
    for ($i = 0; $i < 5; $i++) {
        echo '<img src="generate_image.php" alt="Ticket Image">' . PHP_EOL;
    }
    ?>
</body>
</html>
