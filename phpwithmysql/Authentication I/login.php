<?php
session_start();

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
$loginContactNumber = mysqli_real_escape_string($conn, $_POST['loginContactNumber']);
$loginPassword = mysqli_real_escape_string($conn, $_POST['loginPassword']);

// Check if user exists
$sql = "SELECT * FROM users WHERE contact_number='$loginContactNumber' AND password='$loginPassword'";
$result = $conn->query($sql);

// Before the SQL query
echo "Contact Number: " . $loginContactNumber . "<br>";
echo "Password: " . $loginPassword . "<br>";

// After the SQL query
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    echo "User ID: " . $user['id'] . "<br>";
    echo "Login successful! Welcome, " . $user['first_name'] . "!<br>";
    echo '<a href="logout.php">Log Out</a>';
} else {
    echo "Invalid login credentials.";
}


$conn->close();
?>
