<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Merriweather:700|Open+Sans" rel="stylesheet">
    <link href="../CSS/login_style.css" rel="stylesheet" type="text/css">

    <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../JS/jquery.validate.js"></script>
    <script src="../JS/jquery.js"></script>

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
                    <button type="submit">Get Started</button>
                </form>
            </div>
            <div class="formcontent" id="login">
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
                    <p class="forgot"><a href="">Forgot Password?</a></p>
                    <button type="submit">Log In</button>
                </form>
            </div>
        </section>
    </main>
    <?php require_once("footer.php"); ?>
    <script src="../JS/login.js"></script>
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
