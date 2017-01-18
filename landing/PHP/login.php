<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather:700|Open+Sans" rel="stylesheet">
    <link href="../CSS/login_style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <title>Register/Login</title>
</head>

<body>
<?php require_once("header.php") ?>
    <main>
        <section class="form">
            <ul class="tabs">
                <li><a class="tab active" href="javascript:void(0)" onclick="openTab(event, 'signup')">Sing Up</a></li>
                <li><a class="tab" href="javascript:void(0)" onclick="openTab(event, 'login')">Log In</a></li>
            </ul>
            <div class="formcontent" id="signup">
                <h1>Sign Up</h1>
                <form action="" mehtod="">
                    <div class="toprow">
                        <input class="firstchild" type="text" name="firstname" placeholder="First Name*" autocomplete="off" required>
                        <input class="lastchild" type="text" name="lastname" placeholder="Last Name*" autocomplete="off" required>
                    </div>
                    <div class="secondary">
                        <input type="email" name="mail" placeholder="Email Address*" autocomplete="off" required>
                        <input type="password" name="pass" placeholder="Set a Password*" autocomplete="off" required>
                        <input type="password" name="passcheck" placeholder="Verify Your Password*" autocomplete="off" required>
                    </div>
                    <button type="submit">Get Started</button>
                </form>
            </div>
            <div class="formcontent" id="login">
                <h1>Welcome Back</h1>
                <form action="" method="">
                    <div class="secondary">
                        <input type="email" name="mail" placeholder="Email Address" autocomplete="off" required>
                        <input type="password" name="pass" placeholder="Password" autocomplete="off" required>
                    </div>
                    <p class="forgot"><a href="">Forgot Password?</a></p>
                    <button type="submit">Log In</button>
                </form>
            </div>
        </section>
    </main>
    <?php require_once("footer.php") ?>
    <script src="../JS/login.js"></script>

</body>

</html>
