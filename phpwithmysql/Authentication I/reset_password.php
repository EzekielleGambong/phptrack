<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Reset Password</title>
</head>
<body>
    <div class="container">
        <form action="reset_password_process.php" method="post">
            <h2>Reset Password</h2>
            <label for="resetContactNumber">Enter Contact Number:</label>
            <input type="tel" name="resetContactNumber" required pattern="[0-9]+" minlength="10" maxlength="10">
            
            <button type="submit">Reset Password</button>
        </form>
    </div>
</body>
</html>
