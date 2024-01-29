<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Making Game</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .money-box {
            border: 2px solid #4CAF50;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
        }

        #activity-box {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Money Making Game</h1>
    <div>
        <h2>Current Money: $<?php echo isset($_SESSION['money']) ? $_SESSION['money'] : 500; ?></h2>
        <?php 
        $history = array();
        include 'process.php'; ?>
        <div id="activity-box">
            <?php
                if (isset($_SESSION['activity'])) {
                    $history[] = $_SESSION['activity'];
                    foreach ($history as  $value) {
                        echo $value . "<br>";
                    }
                    
                    unset($_SESSION['activity']);
                }
            ?>
        </div>
        <form action="process.php" method="post">
            <input type="hidden" name="action" value="Low Risk" />
            <input type="submit" value="Low Risk"/>
        </form>
        
        <form action="process.php" method="post">
            <input type="hidden" name="action" value="Moderate Risk" />
            <input type="submit" value="Moderate Risk"/>
        </form>
        
        <form action="process.php" method="post">
            <input type="hidden" name="action" value="High Risk" />
            <input type="submit" value="High Risk"/>
        </form>
        
        <form action="process.php" method="post">
            <input type="hidden" name="action" value="Severe Risk" />
            <input type="submit" value="Severe Risk"/>
        </form>
    </div>
</body>
</html>
