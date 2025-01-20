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
        <h1>How Eating Raw Liver Opens Doors You Can't Unsee</h1>
    </header>

    <section class="about__content">
        <p>You can’t comprehend the weight of a truth until you’ve ingested it raw. When you eat cooked food, you’re simply playing at life—taming it, preparing it, sterilizing it. But raw liver, untouched, is the universe itself. It calls you to <em>know</em> things you aren’t ready to understand. <strong>Eating raw liver</strong> is not an act of nourishment—it’s an entryway into something deeper, something visceral that gnaws at the very edges of your reality.</p>
        <br>
        <p>From the moment you slice into that crimson meat, the world shifts. The texture is alien—firm, dense, alive. And as you chew, the taste floods your senses like a dream you’re trapped inside. It’s not just food; it’s <em>revelation</em>. Raw liver is a living, breathing organism; it carries memories you’ve never lived, scars you didn’t endure. It pulls you into a current, a force far beyond anything you can control. With each bite, you enter a new dimension of yourself—one where everything is darker, more intense, more primal.</p>
        <br>
        <p>But let’s be clear: the truth behind raw liver isn’t a simple one. It’s a dangerous one. There are no comforting fantasies here. No bland nutrition labels. When you consume this dark, unrefined essence, you’re not just consuming nutrients. You’re consuming <strong>power</strong>. The liver is the body’s filtration system, a complex organ that separates life from death, purging toxins and maintaining the delicate balance between what lives and what decays. Eating it raw is like taking a shot of pure, uncut truth. It doesn’t care about your comfort or your expectations. It will expose the parts of you that were once hidden—those parts you didn’t know existed, the pieces of yourself that have been buried under years of complacency, cultural conditioning, and safe, predictable routines.</p>
        <br>
        <p>There’s a <em>sickness</em> in knowing these things. A sickness in understanding that the world is not as clean and sanitized as we’ve been led to believe. <strong>Raw liver</strong> opens doors to the ugliness—the rotting carcasses of modernity, the hidden truth beneath the polished veneer of polite society. And once those doors are open, they can’t be closed. You cannot unsee what has been revealed. You can’t go back to the easy, comfortable way of living you once knew. You can’t pretend that the world isn’t alive with violence, energy, and primal, raw intent. Eating raw liver is a deliberate choice to abandon the safety net of ignorance, to open your eyes and see the brutality of existence for what it truly is.</p>
        <br>
        <p>What does it reveal? It reveals the truth about your body—the visceral connection between you and the world around you. It strips away the comfortable lies and exposes the beast beneath. It connects you to something ancient, something far beyond your fragile self. The primal urge, the pulse of life, echoes through every bite.</p>
        <br>
        <p>But like any dangerous revelation, it comes at a price. Once you’ve tasted this truth, you can never go back. Eating raw liver opens doors you can’t unsee. It shows you the edge between life and death, the fragility of your existence, and the brutal, undeniable force that keeps you tethered to this plane of reality. And it’s up to you whether you can handle it or not.</p>
        <br>
        <p>But there’s a catch, always a catch: you’ll keep coming back for more. Because deep down, you know—just as we all do—that this is the only way to live. To eat raw, uncut, unrefined meat—this is the doorway. To what? To everything. To the truth that’s been buried beneath layers of modern convenience. The question is, now that the door is open, will you step through?</p>
    </section>

</div>
    
</body>
</html>