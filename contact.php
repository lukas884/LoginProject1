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
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="meat_emoji.png">
</head>
<body class="contact__page">
    
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

<!-- Contact Area -->

<div class="contact__div">
    <div class="contact__content">
    <p>If you wish to reach the architects of this strange web of primal truth, there are no clear instructions. The lines of communication are tangled, not easily discernible. But if you *must* inquire, if you feel the urge to step beyond the veil and disturb what has been set into motion, send a message. It will find its way. Not through typical channels, but through pathways that defy reason. Be warned: contact may not lead to what you expect. There are doors in the shadows, but not all doors should be opened.</p>

    <p>The voice behind this site is a whisper in the dark, and like all whispers, it may not return your call. Yet, if you must try, the words will reach us—eventually. And when they do, perhaps something more will stir. Perhaps you will know, as we know, that no question is truly innocent.</p>

    <p>Reach out. Or don’t. The choice, like all choices, is yours. But the consequences—those are beyond you.</p>
    </div>  
</div>

    
</body>
</html>