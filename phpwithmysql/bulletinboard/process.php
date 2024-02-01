<?php
session_start();

if (isset($_POST['add'])) {
    if (empty($_POST['announcement']) || empty($_POST['date'])) {
        $_SESSION['error'] = "Both fields are required.";
        header("Location: index.php");
        exit();
    }

    include('new-connection.php');

    $announcement = $_POST['announcement'];
    $formattedDate = DateTime::createFromFormat('m/d/Y', $_POST['date'])->format('Y-m-d');

    $sql = "INSERT INTO announcements (announcement, date) VALUES ('$announcement', '$formattedDate')";
    $result = $conn->query($sql);

    if (!$result) {
        $_SESSION['error'] = "Error inserting data into the database.";
        header("Location: index.php");
        exit();
    }

    header("Location: main.php");
    exit();
} elseif (isset($_POST['skip'])) {
    header("Location: main.php");
    exit();
}
?>
