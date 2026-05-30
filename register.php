<?php

require_once "vendor/autoload.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
        }

        .register-container {
            width: 350px;
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .register-container h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-size: 14px;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #7c3aed;
            outline: none;
            box-shadow: 0 0 8px rgba(124, 58, 237, 0.3);
        }

        .register-btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: #7c3aed;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .register-btn:hover {
            background: #6d28d9;
        }

        .extra-links {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
        }

        .extra-links a {
            color: #7c3aed;
            text-decoration: none;
        }

        .extra-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h1>Register</h1>

    <form method="post" action="decisionMaker.php">

        <input type="hidden" name="register">

        <div class="input-group">
            <label for="username">Username</label>
            <input
                type="text"
                name="username"
                id="username"
                placeholder="Choose a username"
            />
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input
                type="password"
                name="password"
                id="password"
                placeholder="Create a password"
            />
        </div>

        <div class="input-group">
            <label for="confirm_password">Confirm Password</label>
            <input
                type="password"
                name="confirm_password"
                id="confirm_password"
                placeholder="Repeat your password"
            />
        </div>

        <button type="submit" class="register-btn">
            Create Account
        </button>

        <div class="extra-links">
            <p>Already have an account? <a href="index.php">Sign In</a></p>
        </div>
    </form>
</div>

</body>
</html>