<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather:700|Open+Sans" rel="stylesheet">
    <link href="../CSS/signup_style.css" type="text/css" rel="stylesheet">
    <meta charset="utf-8">
    <title>Sign Up</title>
</head>

<body>
    <?php include_once("header.php") ?>
    <main>
    <section class="main">
        <h1>Register</h1>
    </section>
    <section class="register">
        <form method="post" action="register.php">
            <input type="text" name="name" placeholder="Your Name" class="info">
            <input type="text" name="surname" placeholder="Your Surname" class="info">
            <input type="email" name="email" placeholder="Your Email" class="info">
            <?php 
    
                if($_SESSION['emailtaken'] == 1) {
                    echo '<p>Email is already taken.</p>';
                }
    
            ?>
            <input type="password" name="paswd" placeholder="Choose Password" class="info">
            <input type="password" name="checkpaswd" placeholder="Repeat Password" class="info">
            <label>Recieve Newsletter</label>
            <input type="checkbox" name="newsletter" class="newsletter" checked>
            <button type="submit">Register</button>
        </form>
    </section>
    </main>
    <?php include_once("footer.php") ?>
</body>

</html>
