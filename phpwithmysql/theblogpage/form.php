<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration and Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: space-around;
            margin: 50px auto;
        }

        form {
            width: 300px;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

    </style>
</head>
<body>
    <div class="container">
        <form action="register.php" method="post">
            <h2>Register</h2>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" required pattern="[A-Za-z]{2,}">
            
            <label for="lastName">Last Name:</label>
            <input type="text" name="last_name" required pattern="[A-Za-z]{2,}">
            
            <label for="contactNumber">Contact Number:</label>
            <input type="tel" name="email" required pattern="[0-9]+" minlength="10" maxlength="10">
            
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
