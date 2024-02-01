<?php
// Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "userdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data
$firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
$contactNumber = mysqli_real_escape_string($conn, $_POST['contactNumber']);
$password = mysqli_real_escape_string($conn, $_POST['password']); // Using md5 for simplicity, use better hashing methods in real-world applications

// Insert into database
$sql = "INSERT INTO users (first_name, last_name, contact_number, password) VALUES ('$firstName', '$lastName', '$contactNumber', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
