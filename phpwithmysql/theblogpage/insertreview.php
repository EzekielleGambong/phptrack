<?php
include('db_connection.php');
session_start();

$leaveReview = mysqli_real_escape_string($conn, $_POST['leaveReview']);
$author = $_SESSION['userName'];

$created_at = date("Y-m-d H:i:s");
$sql = "INSERT INTO reviews (author, content, created_at) VALUES ('$author', '$leaveReview', '$created_at')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
