<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Your Account</title>

    <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../JS/jquery.countTo.js"></script>
    <script src="../JS/jquery.lazyload.js"></script>
    <script src="../JS/jquery.validate.js"></script>
    <script src="../JS/jquery.card.js"></script>
    <script src="../JS/jquery.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Merriweather:700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="../CSS/userpage_style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php require_once("userheader.php"); ?>
    <div class="sitecontent">
        <main>
            <section class="userinfo">
                <p class="usrname">Daniil Belov</p>
                <p class="balance">123.95$</p>
            </section>
            <aside class="usernav cf">
                <ul>
                    <li><a class="tab active" onclick="openTab(event, 'settings')">Account Settings</a></li>
                    <li><a class="tab" onclick="openTab(event, 'money')">Top Up</a></li>
                    <li><a class="tab" id="achievtab" onclick="openTab(event, 'achievements')">Achievements</a></li>
                    <li><a class="tab lastuser" onclick="openTab(event, 'wish')">Make a Wish</a></li>
                </ul>
            </aside>
            <div class="maincontent">
                <section class="accountsettings formcontent" id="settings">
                    <h1>Edit Profile</h1>
                    <form id="edit">
                        <div class="mainformcontent">
                            <div class="topprofile">
                                <input type="text" id="firstname" name="firstname" placeholder="Your Name" autocomplete="off">
                                <input type="text" id="lastname" name="lastname" placeholder="Your Last Name" autocomplete="off">
                                <input type="email" id="email" name="email" placeholder="Your Email" autocomplete="off">
                                <div class="wrapper">
                                    <input type="password" id="paswd" name="paswd" placeholder="Edit Password">
                                </div>
                            </div>
                        </div>
                        <div class="confirm">
                            <p class="field"><i class="fa fa-key fa-fw willspin" aria-hidden="true"></i><span>Please enter your current password to confirm changes:</span></p>
                            <input class="field input" type="password" id="currentpaswd" name="currentpaswd" placeholder="Your Current Password">
                            <span class="showpassword">
                                <i class="fa fa-eye-slash show" aria-hidden="true"></i>
                                <i class="fa fa-eye show hidden" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="btnwrapper">
                            <button type="submit">Save Changes</button>
                        </div>
                    </form>
                </section>
                <section class="topup formcontent" id="money">
                    <h1>Top Up Your Wallet</h1>
                    <div class="maintopup">
                        <div class="amountwrapper cf">
                            <div class="dropdown methdofield">
                                <a onclick="openDropDown()" class="currenttitle" id="menutitle">Credit Card</a>
                                <div id="paymentmethod" class="dropdownitems">
                                    <a onclick="selectForm('credit', 'Credit Card')"><i class="fa fa-credit-card fa-fw" aria-hidden="true"></i> Credit Card</a>
                                    <a onclick="selectForm('paypal', 'PayPal')"><i class="fa fa-paypal fa-fw" aria-hidden="true"></i> PayPal</a>
                                    <a onclick="selectForm('qiwi', 'Qiwi')"><i class="fa fa-google-wallet fa-fw" aria-hidden="true"></i> Qiwi</a>
                                </div>
                            </div>
                            <form class="dollar">
                                <input class="amount" placeholder="Amount">
                                <i class="fa fa-usd" aria-hidden="true"></i>
                            </form>
                        </div>
                            <form class="pay cf" id="credit">
                                <div class="bakcgroundcc">
                                    <div class="cardcontainer"></div>
                                    <div class="credittop">
                                        <div class="inputdivisor">
                                            <input class="input card" type="text" id="methodcard" name="methodcard" placeholder="Card Number" autocomplete="off" maxlength="19">
                                        </div>
                                        <div class="inputdivisor">
                                            <input class="input cardname" id="holdername" name="holdername" type="text" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="inputdivisor">
                                        <input class="input carddate" id="mmyy" name="mmyy" type="text" placeholder="mm/yy" autocomplete="off" maxlength="7">
                                    </div>
                                    <div class="inputdivisor">
                                        <input class="input ccv" type="text" id="cc" name="cc" placeholder="CCV" autocomplete="off" maxlength="3">
                                    </div>
                                </div>
                                <div class="btnwrapper">
                                    <button type="submit">Top Up</button>
                                </div>
                            </form>
                        <form class="pay" id="paypal">
                            <input class="field input" type="text" placeholder="PayPal Login" required>
                            <input class="field input" type="password" placeholder="Password" required>
                            <div class="btnwrapper">
                                <button type="submit">Top Up</button>
                            </div>
                        </form>
                        <form class="pay" id="qiwi">
                            <input class="field input" type="text" placeholder="Qiwi Login" required>
                            <input class="field input" type="password" placeholder="Password" required>
                            <div class="btnwrapper">
                                <button type="submit">Top Up</button>
                            </div>
                        </form>
                    </div>
                </section>
                <section class="formcontent" id="achievements">
                    <h1>Your Achievements</h1>
                    <div class="numbers">
                        <div class="donatedrow">
                            <p class="donated">Donated</p>
                            <p class="dollar"><span class="timerone"></span>$</p>
                        </div>
                        <div class="donatedrow">
                            <p class="donated">Recieved</p>
                            <p class="dollar"><span class="timertwo"></span>$</p>
                        </div>
                    </div>
                </section>
                <section class="createwish formcontent" id="wish">
                    <h1>Make a Wish</h1>
                    <form id="shipment">
                        <div class="two">
                            <input type="text" class="field input wish" placeholder="What is Your Wish?" required>
                            <input class="field input wish link" type="text" placeholder="Link to your desired product..." required>
                        </div>
                        <div class="address cf">
                            <p><i class="fa fa-address-card-o fa-fw willspin" aria-hidden="true"></i><span>Please provide your full address:</span></p>
                            <input type="text" id="streetone" name="streetone" class="field input street" placeholder="Address 1" required>
                            <input type="text" id="streettwo" name="streettwo" class="field input street" placeholder="Address 2 (optional)">
                            <input type="text" id="city" name="city" class="field input city" placeholder="City" required>
                            <input type="text" id="zip" name="zip" class="field input zip" placeholder="Zip Code" required>
                            <input type="text" id="country" name="country" class="field input country" placeholder="Country" required>
                        </div>
                        <div class="btnwrapper">
                            <button type="submit">Make Your Wish</button>
                        </div>
                    </form>
                </section>
            </div>
            <div class="boxes">
                <aside class="box current">
                    <h2>Your Current Wish</h2>
                    <div class="boxcontent">
                        <div class="boxtop">
                            <h3 class="sub title">iPhone 6</h3>
                            <p class="sub para">23/12/16</p>
                        </div>
                        <p class="progresspara">Progress</p>
                        <div class="progress">
                            <div id="barone"></div>
                        </div>
                        <p class="collected">Collected: 40 000/70 000</p>
                    </div>
                </aside>
                <div class="divisor"></div>
                <aside class="box random">
                    <h2>Random Wish</h2>
                    <div class="boxcontent">
                        <div class="boxtop">
                            <h3 class="sub title">iPhone 6</h3>
                            <p class="sub para">23/12/16</p>
                        </div>
                        <p class="progresspara">Progress</p>
                        <div class="progress">
                            <div id="bartwo"></div>
                        </div>
                        <p class="collected">Collected: 40 000/70 000</p>
                        <form class="donate">
                            <input type="number" name="amount" required>
                            <button type="submit">Donate</button>
                        </form>
                    </div>
                </aside>
            </div>
        </main>
    </div>
    <?php require_once("footer.php") ?>
    <script src="../JS/login.js"></script>
    <script>
        $("#achievtab").click(function() {
            $('.timerone').countTo({
                from: 0,
                to: 1000,
                speed: 1000
            });
            $('.timertwo').countTo({
                from: 0,
                to: 10000,
                speed: 2000
            });
        });

        $(function() {
            $('.show').click(function() {
                $('.show').toggleClass('hidden');
                $('.showpassword').toggleClass('checked');
                if($('.showpassword').hasClass('checked')) {
                    $('#currentpaswd').attr('type', 'text');
                } else {
                    $('#currentpaswd').attr('type', 'password');
                }
            });
        });

        $(function(){
            $('#credit').card({
                container: '.cardcontainer',
                formSelectors: {
                    numberInput: 'input.card',
                    expiryInput: 'input.carddate',
                    cvcInput: 'input.ccv',
                    nameInput: 'input.cardname'
                }
            }, false);
        });

    </script>
</body>

</html>
