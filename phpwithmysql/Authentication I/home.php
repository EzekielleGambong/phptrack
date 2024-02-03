<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$userDetails = getUserDetails($_SESSION['user_id']);
?>

<h1>Welcome, <?= $userDetails['first_name'] ?>!</h1>
<p>Contact Number: <?= $userDetails['contact_number'] ?></p>

<form method="post" action="logout.php">
    <button type="submit">Log Off</button>
</form>

<?php
function getUserDetails($user_id) {
    
}
?>
