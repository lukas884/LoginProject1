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
    <title>All Articles</title>
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

<div class="all__articles">
    <div class="article__header">
        <h2>All Articles</h2>
        </div>
    <div class="article__list">
        <ul>
            <li>
                <a href="article1.php">Soy Toxicity In Poultry Meat And Eggs</a>
            </li>
            <li>
                <a href="#" class="fake__article">The Ritual Beneath the Table: What Raw Foods Demand of You</a>
            </li>
            <li>
                <a href="#" class="fake__article">A Guide to Eating Shadows</a>
            </li>
            <li>
                <a href="article3.php">How Eating Raw Liver Opens Doors You Can't Unsee</a>
            </li>
            <li>
                <a href="#" class="fake__article">Her Teeth Were Clean, But the Milk Was Screaming</a>
            </li>
            <li>
                <a href="#" class="fake__article">How to Properly Store Your Raw Meats for Optimal Freshness</a>
            </li>
            <li>
                <a href="article2.php">Benzene, Cancer and Soft Drinks Connection</a>
            </li>
            <li>
                <a href="#" class="fake__article">The Last Light</a>
            </li>
            <li>
                <a href="article4.php">Milk of the Abyss: Raw Dairy and the Secrets It Unlocks</a>
            </li>
        </ul>
    </div>
</div>

<div class="main__footer">
    <div class="footer__content">
        <p>Get the all the Books, Workshops, Videos etc. at <a href="https://aajonus.online/" target="_blank">aajonus.online</a></p>
        <p>Search through QnAs, Books and Workshops at <a href="https://aajonus.net" target="_blank">aajonus.net</a></p>
        <p>Esoteric Knowledge, find it at <a href="http://exo-science.com/" target="_blank">exo-science.com</a></p>
    </div>
</div>

<script>
    document.querySelectorAll('.fake__article').forEach(article => {
        article.addEventListener('click', (e) => {
            e.preventDefault();

            if (Math.random() > 0.5) {
                const randomLinks = [
                    "https://aajonus.online/",
                    "https://aajonus.net",
                    "http://exo-science.com/"
                ];
                const randomUrl = randomLinks[Math.floor(Math.random() * randomLinks.length)];
                window.open(randomUrl, '_blank');
            } else {
                const randomMessages = [
                    "The [REDACTED] welcomes you.",
                    "Why did you have to click on this?",
                    "It’s too late now.",
                    "You’re being watched.",
                    "ERROR 404: Sanity not found.",
                    "Turn around. Slowly.",
                    "[REDACTED] at the [REDACTED]."
                ];
                const randomMessage = randomMessages[Math.floor(Math.random() * randomMessages.length)];
                alert(randomMessage);
            }
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const timeKey = 'siteTimeSpent';
        const startTime = Date.now();
        const savedTime = parseInt(localStorage.getItem(timeKey), 10) || 0;

        setInterval(() => {
            const elapsedTime = savedTime + (Date.now() - startTime); 
            const hours = Math.floor(elapsedTime / (1000 * 60 * 60));
            const minutes = Math.floor((elapsedTime / (1000 * 60)) % 60);
            const seconds = Math.floor((elapsedTime / 1000) % 60);

            localStorage.setItem(timeKey, elapsedTime.toString());
        }, 1000);
    });
</script>
    
</body>
</html>