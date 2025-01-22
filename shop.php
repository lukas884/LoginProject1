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
    <title>Shop</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="meat_emoji.png">
</head>
<body class="about__page">
    
<audio autoplay loop>
    <source src="Twin_Peaks_Theme_128kbps.mp3" type="audio/mpeg">
    Your browser does not support this audio element.
</audio>

<div id="header">
    <a id="logout" href="logout.php">Logout</a>
        <h1>Raw.Meat</h1>
    <a id="logout" href="profile.php"><?php echo $user_data['user_name']; ?></a>
</div>

<div class="navbar">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="shop.php">Shop</a>
    <a href="contact.php">Contact</a>

</div>

<!-- Shop -->
<div class="shop__area">
    <div class="shop__pic">
        <img src="construction1.jpg" alt="Website Under Construction">
        <div class="overlay"></div>
    </div>
    <div class="shop__text">
        <p>The lights hum, flickering faintly. The air smells of copper, wet concrete, and something else you can't place. A sign dangles precariously: <b>"UNDER CONSTRUCTION."</b></p>
      
        <p>Beneath it, a greasy handprint smears across a cracked monitor, looping static and a faint whisper—did it just say your name? Probably not.</p>

        <p>We're building something big here. Or maybe small. Or maybe it’s already finished, and you just don’t see it. The scaffolding groans, shifting slightly. Was that movement in the shadows?</p>

        <p>Come back later. Or don’t. We’ll still be here.</p>
    
    </div>
</div>
    
</body>
</html>