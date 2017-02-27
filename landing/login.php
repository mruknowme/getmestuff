<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Merriweather:700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="assets/styles/login_style.css" rel="stylesheet" type="text/css">

    <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="assets/plugins/jquery.validate.js"></script>
    <script src="assets/scripts/jquery.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register/Login</title>
</head>

<body>
    <?php require_once("app/block/header.php"); ?>
    <aside class="mobilenavwrapper">
        <div class="mobilenav">
            <ul>
                <li class="menu"><a class="menulink" href="index.php">Home</a></li>
                <li class="menu"><a class="menulink" href="about.php">About Us</a></li>
                <li class="menu"><a class="menulink" href="login.php#login">Log In</a></li>
                <li class="menu"><a class="menulink" href="login.php#signup">Sign Up</a></li>
                <li class="menu"><a class="menulink current">EN</a> | <a class="menulink">RU</a></li>
            </ul>
        </div>
    </aside>
    <main>
        <section class="form">
            <ul class="tabs">
                <li><a class="tab one" data-tab="signup">Sing Up</a></li>
                <li><a class="tab two" data-tab="login">Log In</a></li>
            </ul>
            <div class="formcontent sign" id="signup" style="display: none;">
                <h1>Sign Up</h1>
                <form action="" mehtod="" id="singupform">
                    <div class="toprow cf" id="topsignup">
                        <div class="errorwrapper up">
                            <input class="firstchild inputsign" type="text" id="firstname" name="firstname" autocomplete="off">
                            <lable class="signlable">First Name</lable>
                        </div>
                        <div class="errorwrapper">
                            <input class="lastchild inputsign" type="text" id="lastname" name="lastname" autocomplete="off">
                            <lable class="signlable">Last Name</lable>
                        </div>
                    </div>
                    <div class="secondary">
                        <div class="inputwrapper">
                            <input class="inputsign" type="email" id="email" name="email" autocomplete="off">
                            <lable class="signlable">Email Address</lable>
                        </div>
                        <div class="inputwrapper">
                            <input class="inputsign" type="password" id="pass" name="pass" autocomplete="off">
                            <lable class="signlable">Set a Password</lable>
                        </div>
                        <div class="inputwrapper">
                            <input class="inputsign" type="password" id="passcheck" name="passcheck" autocomplete="off">
                            <lable class="signlable">Verify Your Password</lable>
                        </div>
                    </div>
                    <div class="thirdrow">
                        <label>
                            <input type="checkbox" name=""> <span>Accept <a href="#">Terms and Conditions</a></span>
                        </label>
                        <button type="submit">Get Started</button>
                    </div>
                </form>
            </div>
            <div class="formcontent login" id="login" style="display: none;">
                <h1>Welcome Back</h1>
                <form action="" method="" id="loginform">
                    <div class="secondary">
                        <div class="inputwrapper">
                            <input class="inputsign" type="email" id="loginmail" name="email" autocomplete="off">
                            <lable class="signlable">Email Address</lable>
                        </div>
                        <div class="inputwrapper">
                            <input class="inputsign" type="password" id="loginpass" name="pass" autocomplete="off">
                            <lable class="signlable">Passowrd</lable>
                        </div>
                    </div>
                    <button class="formbutton" type="submit">Log In</button>
                </form>
                <div class="forgot">
                    <p class="forgotp">Forgot Password?</p>
                </div>
            </div>
            <div class="getpass one cf" style="display: none;">
            <i class="fa fa-plus close" aria-hidden="true"></i>
                        <div class="arrow"></div>
                            <div class="passwrapper cf">
                                <form id="forgotform" style="display: block">
                                    <lable>Enter your email:</lable>
                                    <input id="mailf" name="mailf">
                                    <button>Send</button>
                                </form>
                                <div class="done" style="display: none">
                                    <i class="fa fa-check-circle fa-2x donei" aria-hidden="true"></i>
                                    <p>Check your inbox</p>
                                </div>
                            </div>
                        </div>
            <div class="overlay"></div>
        </section>
    </main>
    <?php require_once("app/block/footer.php"); ?>
    <script>
        $(function(){
            $('input.inputsign').focusout(function() {
                var text_val = $(this).val();
                if (text_val === "") {
                    $(this).removeClass('hasvalue');
                } else {
                    $(this).addClass('hasvalue');
                }
            });
        }); 
    </script>

</body>

</html>
