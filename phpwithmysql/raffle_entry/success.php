<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "raffle_entry";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Success Page</h2>

        <?php
        if ($result->num_rows > 0) {
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>{$row['contact_number']} - {$row['submission_time']} <a href='delete.php?id={$row['id']}'>Delete</a></li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No entries found.</p>";
        }
        ?>

        <a href="index.php">Go back to form</a>
    </div>
</body>
</html>

<?php
$conn->close();
?>
