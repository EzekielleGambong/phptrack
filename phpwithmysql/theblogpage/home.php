<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Fetch user details based on user_id from the session
$userDetails = getUserDetails($_SESSION['user_id']);
?>

<!-- Display user information -->
<h1>Welcome, <?= $userDetails['first_name'] ?>!</h1>
<p>Contact Number: <?= $userDetails['contact_number'] ?></p>

<!-- Log off button -->
<form method="post" action="logout.php">
    <button type="submit">Log Off</button>
</form>

<?php
// Function to get user details based on user ID
function getUserDetails($user_id) {
    // Implement logic to fetch user details from the database
    // Return an associative array of user information
}
?>
