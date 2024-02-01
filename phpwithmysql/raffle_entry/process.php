<?php
// Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "raffle_entry";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contactNumber = mysqli_real_escape_string($conn, $_POST["contactNumber"]);

    if (!preg_match("/^[0-9]{11}$/", $contactNumber)) {
        header("Location: index.php?error=invalid");
        exit();
    }

    $sql = "INSERT INTO contacts (contact_number, submission_time) VALUES ('$contactNumber', NOW())";

    if ($conn->query($sql) === TRUE) {
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
