<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karaoke Score Generator</title>
</head>
<body>
    <?php
    
        for ($i = 1; $i <= 50; $i++) {
            
            $score = rand(1, 100);

            
            if ($score < 50) {
                $message = "Never sing again, ever!";
            } elseif ($score >= 50 && $score <= 79) {
                $message = "Practice more!";
            } elseif ($score >= 80 && $score <= 94) {
                $message = "You're getting better!";
            } else {
                $message = "What an excellent singer!";
            }

            
            echo "<h4>Score: $score</h4>";
            echo "<p>$message</p>";
        }

    ?>
</body>
</html>
