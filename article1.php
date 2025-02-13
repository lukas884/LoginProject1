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
    <title>Soy Toxicity In Poultry Meat And Eggs</title>
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
    <h2>Soy Toxicity In Poultry Meat And Eggs;</h2> 
    <h3>Ask your grower to select better feeds.</h3> 
    <h4>by dr aajonus vonderplanitz, phd nutrition
(Remedies to remove soy toxicity is in last paragraph)</h4>

    <p>Many poultry feeds contain antibiotics, hormones,
arsenic and toxic soy protein. The reasons that arsenic
is used in feed are to keep insects and rodents from
eating feeds, and as an antibiotic. Antibiotics are used
to suppress symptoms of and hide diseases. Hormones
and soy proteins are used to hasten and increase
growth. All of those compounds are toxic and
dangerous, causing diseases, including cancer, heart,
osteoporosis and diabetes. I covered Arsenic in my
accompanying article "Arsenic In Poultry Meat And
Eggs; Another Cancer Connection". Here, of course, the topic is soy.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Soy must be treated to alter natural substances in it
that cause sickness or death to poultry and humans
when eaten. The beans must be bathed in acidic baths
and heated at extreme temperatures. Then they spraydry
it with nitrates to produce protein powder, and add
artificial (chemical) flavorings, MSG, preservatives,
sweeteners and other synthetic ingredients to trick the
pallet of poultry and humans to eat the toxic matter.
According to Dr. Jonathan V. Wright, MD, nitrates
have been known for decades to cause cancer, yet the
FDA allows them in many foods. Soy contains many
phytoestrogens, IGg and trypsin inhibitor that have
caused cancers and inhibited growth in hundreds of
animals. There are many websites that site toxicity and
tests utilizing soy chemicals. Search: "Soy toxic".<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Poultry, especially chicken fed high ratios of soy
protein to increased meat and egg production, taste
unappetizing. The more soy in the feed, the blander
and oddly unappealing is the taste. Fifty years ago, the
population would have rejected eggs and poultry meat
that tasted like that. Poultry grown on mainly corn and
other grains is rich and healthy-­tasting, as well as
health-­giving.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Very often, poultry meat and eggs that are labeled
organic are fed mainly soy, such as Rosie Organic
Chicken. It is not only a misnomer, it is an outright
advertising fraud. Even though the soy that is fed to its
chickens was organically grown, when the soy is
processed with chemicals and used as feed, it fails to
be organic. Rosie "Organic" Chicken feeds its chickens
up to 75% chemically-­treated and processed soy.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;To get your poultry and eggs producers to grow
tastier and healthier meat and eggs, I suggest that you
write to them, give them this information and ask them
to feed their poultry raw meat scraps (fresh or rank poultry
love rank raw meat because they are
omnivorous scavengers) for protein, and corn and other
grains for delicious, flavorful and healthy meat and
eggs. If they need a good mineral supplement to make
eggshells stronger, suggest that they add a little
Terramin clay (www.terramin.com) to their feed.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;To gradually remove soy byproduct toxicity from
within the body, I suggest eating a combination of 2-­3
ounces coconut cream, 1-­inch cube no-­salt-­added raw
cheese, 1 tablespoon unheated honey, 2-­3-­inches
section of unripe raw banana and 1­-3 raw eggs. Eating
enough raw meat daily helps remove body-­stored soyprotein
toxicity.</p>


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