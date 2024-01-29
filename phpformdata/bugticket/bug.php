<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date_today = $_POST['date_today'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $issue_title = $_POST['issue_title'];
    $issue_details = $_POST['issue_details'];

    $date_parts = explode('-', $date_today);
    if (count($date_parts) != 3 || !checkdate($date_parts[1], $date_parts[2], $date_parts[0])) {
        $error = "Invalid date format. Please use YYYY-MM-DD.";
    }
    if (preg_match('/\d/', $first_name) || preg_match('/\d/', $last_name)) {
        $error = "First name and last name should not contain numbers.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    }
    if (strlen($issue_title) > 50 || strlen($issue_details) > 250) {
        $error = "Issue title should not be more than 50 characters, and issue details should not be more than 250 characters.";
    }
    if (isset($error)) {
        echo "<div style='color: red;'>Error: $error</div>";
    } else {
        
        if (!empty($_FILES['screenshot']['name'])) {
            $uploadDir = 'uploads/';
            $uploadFile = $uploadDir . basename($_FILES['screenshot']['name']);

            if (move_uploaded_file($_FILES['screenshot']['tmp_name'], $uploadFile)) {
                echo "Screenshot uploaded successfully.";
            } else {
                echo "Error uploading screenshot.";
            }
        }

        echo "<div style='color: green;'>Thank you for your patience! Please wait for a response from our IT team.</div>";
    }
}
?>
