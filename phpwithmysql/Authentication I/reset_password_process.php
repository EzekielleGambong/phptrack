<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "userdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$resetContactNumber = mysqli_real_escape_string($conn, $_POST['resetContactNumber']);
$newPassword = md5('village88'); 
$sql = "UPDATE users SET password='$newPassword' WHERE contact_number='$resetContactNumber'";

if ($conn->query($sql) === TRUE) {
    echo "Password reset successful! Default password is 'village88'.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
