<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "raffle_entry";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the entry with the specified ID
    $sql = "DELETE FROM contacts WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: success.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>