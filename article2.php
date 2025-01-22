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
    <title>Benzene, Cancer and Soft Drinks Connection</title>
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

<!-- Article Area -->

<div class="article__area">   
    <h2>Benzene, Cancer and Soft Drinks Connection -</h2>
    <h3>The FDA continues its harmful-­to-­the-­public relationship with industry; <br>
How to remove benzene from the body</h3>
    <h4>by dr aajonus vonderplanitz, phd nutrition <br>
(Suggested remedy in last paragraph.)</h4>

    <p>Benzene is listed as carcinogenic by the US Food &
Drug Administration (FDA). FDA and the beverage
industry have been aware of the fact that sodium
benzoate and ascorbic acid together form benzene in
soft drinks since at least 1990. They even debated
about how much a drink's exposure to heat could
exacerbate the benzene-­problem. There was discussion
about reformulating soft drinks to reduce benzene to
safe drinking-­water levels but nothing was mandated.
The FDA set no maximum limit for benzene in soft
drinks.</p><br>
<p>Recently, a concerned industry whistle-­blower paid
for independent testing and discovered that some soft
drinks still contain benzene levels considerably above
the limit allowed in water. The story was reported in
February 2006 by a BeverageDaily.com investigation.
Consequently, FDA re-­opened its investigation of the
benzene-­issue.</p><br>
<p>An FDA chemist and the US soft-­drink association
stated that some soft-­drink firms might not know of the
potential for sodium benzoate and ascorbic acid to
form benzene in drinks. Anyone who believes that any
multi-­billion-­dollar-­yearly industry is not aware of
everything about the chemistry of its products is naive.
The chemical reaction of sodium benzoate and
ascorbic acid help create the zing and addiction that
appeals to soft-­drinkers. The soft-­drink industry does
not want to stop using it in some products even if it
causes or helps cause cancer in its customers.</p><br>
<p>Industry and FDA continue to assure us that
consumers are not at immediate risk from drinks
containing benzene at the levels found in soft drinks to
date. Science, rather than speculative belief, shows that
there is immediate harm to soft-­drinkers. FDA has
knowingly allowed consumers to drink carcinogenic
benzene for 15 years and kept those who needed to know ignorant. </p><br>
<p>For people who consumed soft drinks and want to
remove any bodily storage of benzene before it could
cause cancer, I suggest that they drink 1-­2 cups of raw
mixed vegetable juices of only 90% celery and 10%
cilantro once daily around noon-­time for 5 consecutive
days. I suggest that they eat 1 tablespoon of no-­salt-added
raw cheese and 1 tablespoon of unsalted raw
butter or avocado about 20 minutes after drinking the
juices. I suggest that they repeat that process every 10
days for 2-­6 years, depending on how much soft drinks
they consumed.</p>

</div>

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