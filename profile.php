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
    <title>Profile</title>
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

<div class="profile__main">
    <h2>Profile</h2>
    <div class="profile__header">
        <div class="profile__avatar">
            <img src="glitch-avatar.png" alt="Your Face?" />
        </div>
        <div class="profile__info">
            <h3 class="profile__name"> <?php echo $user_data['user_name']; ?></h3>
        </div>
    </div>
    <div class="profile__bio">
    <p>
            Known for reading at night, alone, with the hum of a distant refrigerator. Prefers articles about shadows, teeth, 
            and what lies beneath. The algorithm is watching, and it likes what it sees. Time does not pass in the usual way 
            here; minutes stretch into hours, but only for you. Others say the articles make sense. Do they? Or is that just 
            another lie whispered in the static? 
        </p>
        <p>
            Once, your cursor hovered over an article titled "The Last Light," but you didn’t click it. You still feel its 
            pull sometimes, like a hook buried deep in your mind. There are stories here that shouldn't exist—scraps of 
            memory, echoes of futures that never were, reflections that blink back at you from the screen. You try not to 
            think about them, but they always find you.
        </p>
        <p>
            You are not alone. There are others here, faceless readers who leave fingerprints on the margins of the page. 
            You've seen their traces: half-finished comments, usernames that flicker and fade, a lingering scent of copper 
            and ozone. But you’ll never meet them. The meat is raw. The meat is eternal. Keep reading. Don’t stop. The page 
            is hungry, and it’s waiting for you.
        </p>
    </div>
</div>

<div class="profile__time-spent">
    <h3>Time Spent</h3>
    <p class="time__details">
        <span class="time__hours">0 hours</span>, <span class="time__minutes">0 minutes</span>, and 
        <span class="time__seconds">0 seconds</span>
        <br />
        <span class="time__comment">But it feels like you've been here forever.</span>
    </p>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const timeKey = 'siteTimeSpent';
        const startTime = Date.now();
        const savedTime = parseInt(localStorage.getItem(timeKey), 10) || 0;
        const timeDetails = document.querySelector('.time__details');

        setInterval(() => {
            const elapsedTime = savedTime + (Date.now() - startTime); 
            const hours = Math.floor(elapsedTime / (1000 * 60 * 60));
            const minutes = Math.floor((elapsedTime / (1000 * 60)) % 60);
            const seconds = Math.floor((elapsedTime / 1000) % 60);

            timeDetails.innerHTML = `
                <span class="time__hours">${hours} hours</span>, 
                <span class="time__minutes">${minutes} minutes</span>, and 
                <span class="time__seconds">${seconds} seconds</span>
                <br />
                <span class="time__comment">But it feels like you've been here forever.</span>
            `;
            localStorage.setItem(timeKey, elapsedTime.toString());
        }, 1000);
    });
</script>
    
</body>
</html>