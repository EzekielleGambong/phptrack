<?php
session_start();

include('new-connection.php');

$sql = "SELECT * FROM announcements ORDER BY date DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Announcements</h2>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $formattedDate = date('m/d/Y', strtotime($row['date']));
            echo "<p>{$formattedDate} - {$row['announcement']}</p>";
        }
    } else {
        echo "<p>No announcements yet.</p>";
    }
    ?>
</body>
</html>
