<?php
if (isset($_POST['upload'])) {
    $uploadDirectory = 'uploads/';
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0755, true);
    }

    $uploadedFile = $uploadDirectory . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadedFile);

    // Save file information to the database
    
    $conn = new mysqli('127.0.0.1', 'root', '', 'htmlpagination');
    // Create the database table if it does not exist
    $conn->query("CREATE TABLE IF NOT EXISTS uploaded_files (
                    id INT(11) NOT NULL AUTO_INCREMENT,
                    file_name VARCHAR(255) NOT NULL,
                    PRIMARY KEY (id)
                  ) ENGINE=InnoDB DEFAULT CHARSET=utf8");

    $fileName = $conn->real_escape_string(basename($_FILES['file']['name']));
    $conn->query("INSERT INTO uploaded_files (file_name) VALUES ('$fileName')");
    $conn->close();

    header('Location: index.php');
    exit();
}
?>
