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
    <title>Milk of the Abyss: Raw Dairy and the Secrets It Unlocks</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="meat_emoji.png">
</head>
<body class="article3">
    
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
    <header class="article__header">
        <h1>Milk of the Abyss: Raw Dairy and the Secrets It Unlocks</h1>
    </header>

    <section class="about__content">
        <p>Raw milk is alive. To drink it is to swallow something untamed, something that resists the sterile march of modernity. The cream rises to the top, thick and unbothered, as if it holds no regard for the laws of gravity. But there is more here than cream and fat—more than bacteria or enzymes. Those who drink deeply know this. They feel it in the back of their throat, at the edge of their dreams. The milk changes you.</p>
        <br>
        <p>There are stories. A farmer in Nebraska who started every morning with a glass of raw milk was found wandering his fields, muttering about "the sound of the sky breaking open." A woman in Maine claimed that after drinking raw milk for three months, she could taste colors and see what she called “the milk’s memories.” Another man insisted that the milk had whispered a name to him—his name—but it wasn’t the one his mother gave him.</p>
        <br>
        <p>These stories are often laughed off as the delusions of zealots or the side effects of fermentation. But anyone who has consumed raw dairy for long enough will tell you there’s a point of no return. At first, you feel stronger, clearer, as though the milk is waking something dormant inside you. Your skin glows. Your teeth seem sharper. Food tastes brighter. But then the dreams begin. Dreams that don’t feel like dreams. The milk brings them.</p>
        <br>
        <p>A man who once drank raw milk described it like this: “At night, I see something. A great void, vast and black, and in the center, a single drop of milk, suspended. It ripples. It whispers to me, telling me things I don’t want to hear but can’t stop listening to.” He stopped drinking the milk after that. Or at least he tried. He claimed the milk didn’t stop drinking him.</p>
        <br>
        <p>There’s an old idea, whispered in health circles and primal diet forums, that raw foods carry a sort of memory. A connection to the life they came from. Raw milk, untouched by heat or human interference, is thought to be pure memory—an unbroken chain linking you to the cow, the grass it ate, the soil it grew from, and something beyond all of that. Something older. Something vast.</p>
        <br>
        <p>The followers of the primal diet speak of “high milk,” fermented and bubbling, kept just shy of rot. They claim it unlocks doors. Some drink it to heal their bodies, others to sharpen their minds, and a few to see what lies on the other side. But they rarely talk about what they find there.</p>
        <br>
        <p>Those who stop drinking the milk often describe feeling its absence like a shadow in their chest. They say the milk leaves a hunger behind, but not for food. They don’t elaborate. They rarely need to. You can see it in their eyes, the way they glance at their hands as if they don’t trust them anymore.</p>
        <br>
        <p>Raw milk is not for the faint of heart. It carries with it a promise and a warning. To drink it is to make a pact, to invite something living into your body and let it make itself at home. And once it does, you may find that it starts to whisper. It whispers of doors you didn’t know existed, and keys you never asked to hold. The question is: are you ready to listen?</p>
    </section>
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