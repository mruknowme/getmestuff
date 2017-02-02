<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather:700|Open+Sans" rel="stylesheet">
    <link href="../CSS/login_style.css" rel="stylesheet" type="text/css">

    <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../JS/jquery.validate.js"></script>

    <meta charset="utf-8">
    <title>Register/Login</title>
</head>

<body>
    <?php require_once("header.php"); ?>
    <main>
        <section class="form">
            <ul class="tabs">
                <li><a class="tab active" id="one" href="javascript:void(0)" onclick="openTab(event, 'signup')">Sing Up</a></li>
                <li><a class="tab" id="two" href="javascript:void(0)" onclick="openTab(event, 'login')">Log In</a></li>
            </ul>
            <div class="formcontent sing" id="signup">
                <h1>Sign Up</h1>
                <form action="" mehtod="" id="singupform">
                    <div class="toprow" id="topsignup">
                        <div class="errorwrapper up">
                            <input class="firstchild" type="text" id="firstname" name="firstname" placeholder="First Name*" autocomplete="off">
                        </div>
                        <div class="errorwrapper">
                            <input class="lastchild" type="text" id="lastname" name="lastname" placeholder="Last Name*" autocomplete="off">
                        </div>
                    </div>
                    <div class="secondary">
                        <input type="email" id="email" name="email" placeholder="Email Address*" autocomplete="off">
                        <input type="password" id="pass" name="pass" placeholder="Set a Password*" autocomplete="off">
                        <input type="password" id="passcheck" name="passcheck" placeholder="Verify Your Password*" autocomplete="off">
                    </div>
                    <button type="submit">Get Started</button>
                </form>
            </div>
            <div class="formcontent" id="login">
                <h1>Welcome Back</h1>
                <form action="" method="" id="loginform">
                    <div class="secondary">
                        <input type="email" id="loginmail" name="email" placeholder="Email Address" autocomplete="off" required>
                        <input type="password" id="loginpass" name="pass" placeholder="Password" autocomplete="off" required>
                    </div>
                    <p class="forgot"><a href="">Forgot Password?</a></p>
                    <button type="submit">Log In</button>
                </form>
            </div>
        </section>
    </main>
    <?php require_once("footer.php"); ?>
    <script src="../JS/login.js"></script>
    <script src="../JS/jquery.js"></script>

</body>

</html>
