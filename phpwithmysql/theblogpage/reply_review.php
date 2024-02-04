<?php
include('db_connection.php');
session_start();

$content = mysqli_real_escape_string($conn, $_POST['replyArea']);
$author = $_SESSION['userName'];
$reviewId = $_POST['replyId'];  // Retrieve the replyId from $_POST
$created_at = date("Y-m-d H:i:s");

$sql = "INSERT INTO replies (author, content, created_at, reviewId) VALUES ('$author', '$content', '$created_at', '$reviewId')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
