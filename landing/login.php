<!DOCTYPE html>
<html class="login overflow-visible">

<head>
    <link rel="stylesheet" type="text/css" href="assets/styles/main.css">

    <script type="text/javascript" src="assets/scripts/jquery-3.2.1.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GetMeStuff | SignUp</title>
</head>

<body class="overflow-visible">
    <?php require_once("app/block/header.php"); ?>
    <main class="mh mw">
        <section class="pos-r flex vertical center">
            <ul class="tabs">
                <li class="active" data-tab="signup">Sing Up</li>
                <li data-tab="login">Log In</li>
            </ul>
            <div class="form mw" id="signup" style="display: block;">
                <h1>Sign Up</h1>
                <form class="mw vertical center" action="" mehtod="" id="singupform">
                    <div class="top-row flex start mw">
                        <div class="pos-r w45">
                            <input type="text" id="firstname" name="firstname" autocomplete="off">
                            <label class="animated">First Name</label>
                        </div>
                        <div class="pos-r w45">
                            <input type="text" id="lastname" name="lastname" autocomplete="off">
                            <label class="animated">Last Name</label>
                        </div>
                    </div>
                    <div class="mw">
                        <div class="pos-r mw">
                            <input class="inputsign" type="email" id="email" name="email" autocomplete="off">
                            <label class="animated">Email Address</label>
                        </div>
                        <div class="pos-r mw">
                            <input class="inputsign" type="password" id="pass" name="pass" autocomplete="off">
                            <label class="animated">Set a Password</label>
                        </div>
                        <div class="pos-r mw">
                            <input class="inputsign" type="password" id="passcheck" name="passcheck" autocomplete="off">
                            <label class="animated">Verify Your Password</label>
                        </div>
                    </div>
                    <div class="flex vertical center mw">
                        <label class="terms flex center self-end">
                            <input type="checkbox" name=""> <span>Accept <a class="no-select" href="#">Terms and Conditions</a></span>
                        </label>
                        <button class="mw" type="submit">Get Started</button>
                    </div>
                </form>
            </div>
            <div class="form pos-r mw flex vertical center" id="login" style="display: none;">
                <h1>Welcome Back</h1>
                <form class="vertical center" action="" method="" id="loginform">
                    <div class="mw">
                        <div class="pos-r mw">
                            <input type="email" id="loginmail" name="email" autocomplete="off">
                            <label class="animated">Email Address</label>
                        </div>
                        <div class="pos-r mw">
                            <input type="password" id="loginpass" name="pass" autocomplete="off">
                            <label class="animated">Passowrd</label>
                        </div>
                    </div>
                    <button class="mw" type="submit">Log In</button>
                </form>
                <div class="pos-a forgot">
                    <p>Forgot Password?</p>
                </div>
            </div>
            <div class="forgot-form pos-a" style="display: none;">
                <div class="pos-a arrow"></div>
                <div class="pos-r mw pas-wrapper">
                    <form class="pos-a pos-center mw flex vertical start" id="forgotform" style="display: block">
                        <label>Enter your email:</label>
                        <div class="flex start">
                            <input id="mailf" name="mailf">
                            <button>Send</button>
                        </div>
                    </form>
                    <div class="done" style="display: none">
                        <i class="fa fa-check-circle fa-2x pos-r" aria-hidden="true"></i>
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
