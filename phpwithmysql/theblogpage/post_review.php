<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// Include database connection file
include('db_connection.php');

// Get user input
$title = $_POST['title'];
$content = $_POST['content'];
$user_id = $_SESSION['user_id'];

// Insert review into the database
$query = "INSERT INTO reviews (user_id, title, content) VALUES ('$user_id', '$title', '$content')";
mysqli_query($conn, $query);

// Close database connection
mysqli_close($conn);

// Redirect to the main page
header("Location: index.php");
exit();
?>
