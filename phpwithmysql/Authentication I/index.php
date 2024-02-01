<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registration and Login</title>
</head>
<body>
    <div class="container">
        <form action="register.php" method="post">
            <h2>Register</h2>
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName" required pattern="[A-Za-z]{2,}">
            
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName" required pattern="[A-Za-z]{2,}">
            
            <label for="contactNumber">Contact Number:</label>
            <input type="tel" name="contactNumber" required pattern="[0-9]+" minlength="10" maxlength="10">
            
            <label for="password">Password:</label>
            <input type="password" name="password" required minlength="8">
            
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" name="confirmPassword" required minlength="8">
            
            <button type="submit">Register</button>
        </form>

        <form action="login.php" method="post">
            <h2>Login</h2>
            <label for="loginContactNumber">Contact Number:</label>
            <input type="tel" name="loginContactNumber" required pattern="[0-9]+" minlength="10" maxlength="10">
            
            <label for="loginPassword">Password:</label>
            <input type="password" name="loginPassword" required minlength="8">
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
