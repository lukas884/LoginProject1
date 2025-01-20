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
    <title>Raw.Meat</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="meat_emoji.png">
</head>
<body>
    
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

<div class="welcome"> 
    <p>Welcome, <?php echo $user_data['user_name']; ?>! Check this out...</p>
</div>  

<div class="main__content">

    <div class="main__navbar">
        <h3>Articles:</h3>
        <a href="article1.php">Soy Toxicity In Poultry Meat And Eggs</a>
        <a href="article2.php"> Benzene, Cancer and Soft Drinks Connection</a>
        <a href="article3.php">How Eating Raw Liver Opens Doors You Can't Unsee</a>
    </div>

    <div class="main__featured">
        <p>"...health is the basic gift of all life - 
            as the sun shines on everybody. Food, what one
            does to it and what one eats, determines health." <br> <br>
            - Aajonus Vonderplanitz</p>
    </div>

</div>

<div class="main__footer">
    <div class="footer__content">
        <p>Get the all the Books, Workshops, Videos etc. at <a href="https://aajonus.online/" target="_blank">aajonus.online</a></p>
        <p>Search through QnAs, Books and Workshops at <a href="https://aajonus.net" target="_blank">aajonus.net</a></p>
        <p>Esoteric Knowledge, find it at <a href="http://exo-science.com/" target="_blank">exo-science.com</a></p>
    </div>
</div>
    
</body>
</html>