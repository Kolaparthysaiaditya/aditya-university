<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            background-image: url("https://i.ytimg.com/vi/OQ3uTuvBVD8/maxresdefault.jpg");
            background-size: cover;
            background-repeat:no-repeat;
          
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            padding-top: 100px;
        }
        h2 {
            color: gold;
        }
        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
        }
        a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            color: white;
            background-color: #ff4444;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>
    <div>
        <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
        <p>You are logged in.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
