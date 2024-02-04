<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel to HTML Converter</title>
</head>
<body>
    <h1>Upload Excel File</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
        <button type="submit" name="upload">Upload</button>
    </form>

    <h2>Uploaded Files</h2>
    <?php
    // Display uploaded files
    $files = glob("uploads/*.csv");
    foreach ($files as $file) {
        echo '<a href="view.php?file=' . urlencode(basename($file)) . '">' . basename($file) . '</a><br>';
    }
    ?>
</body>
</html>
