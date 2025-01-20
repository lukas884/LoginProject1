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

<!-- About Area -->

<div class="article__area">   
    <header class="about__header">
        <h1>About Us</h1>
    </header>

    <section class="about__content">
        <p>Welcome to <strong>raw.meat</strong>—where the quiet hum of the universe swirls beneath each bite of raw, untouched meat. Here, the lines blur. What is nourishment? What is ritual? What is <em>alive</em>? Inspired by the cryptic teachings of Aajonus Vonderplanitz and fueled by a haunting rhythm that pulses through the air like a forgotten melody, we embrace a truth that most have forgotten: true health lies not in what we cook, but in what we consume <strong>unfiltered</strong>, as nature intended. And in that rawness, we discover the edges of existence.</p>
        <br>
        <p>At <strong>raw.meat</strong>, we walk the line between the known and the unknown. The Primal Diet is our compass—a strange, otherworldly map that guides us back to the forgotten ways of those who thrived on the flesh of creatures untamed. We eat the raw, the pure, the unseasoned, and through each bite, we unlock the mysteries of our own flesh. It’s not just a diet—it’s a strange, dark ritual, one that twists and turns as you sink deeper into its grip.</p>
        <br>
        <p>The air is thick with the sound of distant, echoing wind chimes, and somewhere, in the shadows, the whisper of ancient voices calls us toward the meat we <em>must</em> consume. Articles like “The Quiet Power of Raw Bone Marrow” and “How Eating Raw Liver Opens Doors You Can’t Unsee” will guide you through a labyrinth of knowledge—dark knowledge, strange knowledge, the kind that hints at something more <strong>beneath</strong> the surface. Here, we don’t just feed the body. We feed the soul, the instincts, the part of us that lingers just beyond our waking eyes, caught between dream and reality.</p>
        <br>
        <p>Every piece of raw meat is a journey into the unknown. Raw steak isn’t just food—it’s an offering, a <em>connection</em>, a communion with the primordial forces that stir in the depths of the earth. Every organ, every cut, carries with it a secret. A taste. A vision. And with each meal, we come closer to the truth—that raw food holds the power to unlock parts of us we didn’t even know were <em>there</em>.</p>
        <br>
        <p>The quiet rhythm of a knife cutting into flesh echoes in the background as you read about how “Eating Raw Eggs Opens the Door to Your Own Reflection” or how “Raw Bone Broth Is the Portal to Another Time.” The <strong>Twin Peaks</strong> theme plays on a loop, a subtle soundtrack to the bizarre and esoteric journey you are about to take. Here, eating isn’t just about sustenance—it’s about tapping into something <strong>older</strong>, something raw. Something that’s been with us since the dawn of time.</p>
        <br>
        <p>At <strong>raw.meat</strong>, we believe that health isn’t just something you <em>have</em>. It’s something you <em>become</em>. You become the meat. You become the primal, untamed energy that flows through you. And somewhere, in the stillness, as the haunting music plays softly, you may just hear the distant cry of the wild—calling you to remember.</p>
        <br>
        <p>So come. Step through the doorway. Take a bite. And let the rawness consume you, body and soul. This is <strong>raw.meat</strong>—where the truth is served in the darkest cuts of nature, and the journey has only just begun.</p>
    </section>
</div>
    
</body>
</html>