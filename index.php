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
    
<audio autoplay loop>
    <source src="Twin_Peaks_Theme_128kbps.mp3" type="audio/mpeg">
    Your browser does not support this audio element.
</audio>

<div id="header">
    <a id="logout" href="logout.php">Logout</a>
        <h1>Le Website</h1>
    <a id="logout" href="profile.php"><?php echo $user_data['user_name']; ?></a>
</div>

<div class="navbar">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="shop.php">Shop</a>
    <a href="contact.php">Contact</a>

</div>

<div class="welcome"> 
    <p>Welcome, <?php echo $user_data['user_name']; ?>! Check this out...</p>
</div>  

<div class="main__content">

    <div class="main__navbar">
        <h3>Articles:</h3>
    </div>

    <div class="main__featured">

    </div>

</div>
    
</body>
</html>