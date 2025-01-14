<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($connection);    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div id="header">
        <h1>Le Website</h1>
    </div>
    <a href="logout.php">Logout</a>
    <h1>Le index page</h1>

    <br>
    Welcome, <?php echo $user_data['user_name']; ?>!
    
</body>
</html>