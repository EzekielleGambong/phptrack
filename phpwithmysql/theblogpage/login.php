<?php
session_start();

include('db_connection.php');


$loginContactNumber = mysqli_real_escape_string($conn, $_POST['loginContactNumber']);
$loginPassword = mysqli_real_escape_string($conn, $_POST['loginPassword']);

$sql = "SELECT * FROM users WHERE email='$loginContactNumber' AND password='$loginPassword'";
$result = $conn->query($sql);


echo "Contact Number: " . $loginContactNumber . "<br>";
echo "Password: " . $loginPassword . "<br>";


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
