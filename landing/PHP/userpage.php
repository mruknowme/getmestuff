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
    <script src="../JS/sektor.js"></script>
    <script src="../JS/jquery.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Merriweather:700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="../CSS/userpage_style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php require_once("userheader.php"); ?>
        <main>
            <div class="userpagecontent">
                <section class="userinfo">
                    <p class="usrname">Daniil Belov</p>
                    <p class="balance">123.95$</p>
                </section>
                <div class="maincontentwrapper">
                <div class="maintabs">
                    <aside class="usernav">
                        <ul>
                            <li><a class="tabusr active" data-tab="settings">Account Settings</a></li>
                            <li><a class="tabusr" data-tab="money">Top Up</a></li>
                            <li><a class="tabusr" id="achievtab" data-tab="achievements">Achievements</a></li>
                            <li><a class="tabusr lastuser" data-tab="wish">Make a Wish</a></li>
                        </ul>
                    </aside>
                    <div class="maincontent">
                        <section class="accountsettings formcontentusr" id="settings">
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
                                    <input class="field input" type="password" id="currentpaswd" name="currentpaswd" placeholder="Your Current Password" autocomplete="off">
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
                        <section class="topup formcontentusr" id="money">
                            <h1>Top Up Your Wallet</h1>
                            <div class="maintopup">
                                <div class="amountwrapper cf">
                                    <div class="dropdown methdofield">
                                        <a class="currenttitle" id="menutitle">Credit Card</a>
                                        <div id="paymentmethod" class="dropdownitems" style="display: none">
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
                        <section class="formcontentusr" id="achievements">
                            <h1>Your Achievements</h1>
                            <div class="achievementswrapper">
                                <div class="numbers">
                                    <div class="donatedrow">
                                        <p class="donated">Donated:</p>
                                        <p class="doanteddollar"><span class="timerone"></span>$</p>
                                    </div>
                                    <div class="donatedrow">
                                        <p class="donated">Recieved:</p>
                                        <p class="doanteddollar"><span class="timertwo"></span>$</p>
                                    </div>
                                </div>
                                <div class="awards">
                                    <div class="currency">
                                        <div class="infoses">
                                            <p class="awardinfo">Use points to get an extra <a class="extra">Wish</a> (200 points)</p>
                                            <p class="awardmoreinfo">(Click on a badge for more info.)</p>
                                        </div>
                                        <p class="stars">123 <i class="fa fa-star" aria-hidden="true"></i></p>
                                        <div class="notenough">Sorry, you don't have enough points.</div>
                                        <div class="cool">You now have one extra whish</div>
                                    </div>
                                    <div class="badges">
                                        <div class="badgewrapper einz">
                                            <div class="radial number1"></div>
                                            <img src="../IMG/badge.svg">
                                            <span>Donator(36%)</span>
                                            <div class="achievtooltip einzt">
                                                <h4>Donator - 20 <i class="fa fa-star" aria-hidden="true"></i></h4>
                                                <p>Donate 300$ - 108$/300$</p> 
                                            </div>
                                        </div>
                                        <div class="badgewrapper zwei">
                                            <div class="radial number2"></div>
                                            <img src="../IMG/badge.svg">
                                            <span>Donator(36%)</span>
                                            <div class="achievtooltip">
                                                <h4>Donator</h4>
                                                <p>Donate 300$ - 108$/300$</p> 
                                            </div>
                                        </div>
                                        <div class="badgewrapper drei">
                                            <div class="radial number3"></div>
                                            <img src="../IMG/badge.svg">
                                            <span>Donator(36%)</span>
                                            <div class="achievtooltip">
                                                <h4>Donator</h4>
                                                <p>Donate 300$ - 108$/300$</p> 
                                            </div>
                                        </div>
                                        <div class="badgewrapper">
                                            <div class="radial number4"></div>
                                            <img src="../IMG/badge.svg">
                                            <span>Donator(36%)</span>
                                            <div class="achievtooltip">
                                                <h4>Donator</h4>
                                                <p>Donate 300$ - 108$/300$</p> 
                                            </div>
                                        </div>
                                        <div class="badgewrapper">
                                            <div class="radial number5"></div>
                                            <img src="../IMG/badge.svg">
                                            <span>Donator(36%)</span>
                                            <div class="achievtooltip">
                                                <h4>Donator</h4>
                                                <p>Donate 300$ - 108$/300$</p> 
                                            </div>
                                        </div>
                                        <div class="badgewrapper">
                                            <div class="radial number6"></div>
                                            <img src="../IMG/badge.svg">
                                            <span>Donator(36%)</span>
                                            <div class="achievtooltip">
                                                <h4>Donator</h4>
                                                <p>Donate 300$ - 108$/300$</p> 
                                            </div>
                                        </div>
                                        <div class="badgewrapper">
                                            <div class="radial number7"></div>
                                            <img src="../IMG/badge.svg">
                                            <span>Donator(36%)</span>
                                            <div class="achievtooltip">
                                                <h4>Donator</h4>
                                                <p>Donate 300$ - 108$/300$</p> 
                                            </div>
                                        </div>
                                        <div class="badgewrapper">
                                            <div class="radial number8"></div>
                                            <img src="../IMG/badge.svg">
                                            <span>Donator(36%)</span>
                                            <div class="achievtooltip">
                                                <h4>Donator</h4>
                                                <p>Donate 300$ - 108$/300$</p> 
                                            </div>
                                        </div>
                                        <div class="badgewrapper">
                                            <div class="radial number9"></div>
                                            <img src="../IMG/badge.svg">
                                            <span>Donator(36%)</span>
                                            <div class="achievtooltip">
                                                <h4>Donator</h4>
                                                <p>Donate 300$ - 108$/300$</p> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="createwish formcontentusr" id="wish">
                            <h1>Make a Wish</h1>
                            <form id="shipment">
                                <div class="two">
                                    <div class="wishwrapper">
                                        <input type="text" class="field input wish" id="yourwish" name="yourwish" placeholder="What is Your Wish?">
                                    </div>
                                    <div class="wishwrapper">
                                        <input class="field input wish link" type="text" id="linkwish" name="linkwish" placeholder="Link to your desired product...">
                                    </div>
                                </div>
                                <div class="address cf">
                                    <p><i class="fa fa-address-card-o fa-fw willspin" aria-hidden="true"></i><span>Please provide your full address:</span></p>
                                    <div class="addresswrapper">
                                        <input type="text" id="streetone" name="streetone" class="field input street" placeholder="Address 1">
                                    </div>
                                    <div class="addresswrapper">
                                        <input type="text" id="streettwo" name="streettwo" class="field input street" placeholder="Address 2 (optional)">
                                    </div>
                                    <div class="city">
                                        <input type="text" id="city" name="city" class="field input" placeholder="City">
                                    </div>
                                    <div class="zip">
                                        <input type="text" id="zip" name="zip" class="field input" placeholder="Zip Code">
                                    </div>
                                    <div class="country">
                                        <input type="text" id="country" name="country" class="field input" placeholder="Country">
                                    </div>
                                </div>
                                <div class="btnwrapper">
                                    <button type="submit">Make Your Wish</button>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
                <div class="boxes">
                    <aside class="box">
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
                    <aside class="box">
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
            </div>
            </div>
        </main>
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
