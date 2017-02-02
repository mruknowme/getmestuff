<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Your Account</title>

    <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../JS/jquery.countTo.js"></script>
    <script src="../JS/jquery.lazyload.js"></script>
    <script src="../JS/jquery.validate.js"></script>
    <script src="jquery.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather:700|Open+Sans" rel="stylesheet">
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
            <aside class="usernav">
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
                            <p class="field">Please enter your current password to confirm changes:</p>
                            <input class="field input" type="password" id="currentpaswd" name="currentpaswd" placeholder="Your Current Password">
                        </div>
                        <div class="btnwrapper">
                            <button type="submit">Save Changes</button>
                        </div>
                    </form>
                </section>
                <section class="topup formcontent" id="money">
                    <h1>Top Up Your Wallet</h1>
                    <div class="dropdown methdofield">
                        <a onclick="openDropDown()" class="currenttitle" id="menutitle">Credit Card</a>
                        <div id="paymentmethod" class="dropdownitems">
                            <a onclick="selectForm('credit', 'Credit Card')">Credit Card</a>
                            <a onclick="selectForm('paypal', 'PayPal')">PayPal</a>
                            <a onclick="selectForm('qiwi', 'Qiwi')">Qiwi</a>
                        </div>
                    </div>
                    <form class="pay" id="credit">
                        <input class="field input name" type="text" placeholder="Cardholder's Name" required>
                        <div class="topuprow">
                            <input class="input card" type="text" name="card" placeholder="Card Number" autocomplete="off" required>
                            <input class="input ccv" type="text" name="ccv" placeholder="CCV" autocomplete="off" required>
                        </div>
                        <div class="daterow">
                            <div class="dropdown datefield">
                                <input type="text" placeholder="Month" value="" onclick="openDate()" class="currenttitle" id="datetitle" readonly>
                                <div id="date" class="dropdownitems month">
                                    <a onclick="chnageDate('January')">January</a>
                                    <a onclick="chnageDate('Febuary')">February</a>
                                    <a onclick="chnageDate('March')">March</a>
                                    <a onclick="chnageDate('April')">April</a>
                                    <a onclick="chnageDate('May')">May</a>
                                    <a onclick="chnageDate('June')">June</a>
                                    <a onclick="chnageDate('July')">July</a>
                                    <a onclick="chnageDate('August')">August</a>
                                    <a onclick="chnageDate('September')">September</a>
                                    <a onclick="chnageDate('October')">October</a>
                                    <a onclick="chnageDate('November')">Novermber</a>
                                    <a onclick="chnageDate('December')">December</a>
                                </div>
                            </div>
                            <div class="dropdown datefield">
                                <input type="text" placeholder="Year" value="" onclick="openYear()" class="currenttitle" id="yeartitle" readonly>
                                <div id="year" class="dropdownitems">
                                    <a onclick="chnageYear('2017')">2017</a>
                                    <a onclick="chnageYear('2018')">2018</a>
                                    <a onclick="chnageYear('2019')">2019</a>
                                    <a onclick="chnageYear('2020')">2020</a>
                                    <a onclick="chnageYear('2021')">2021</a>
                                </div>
                            </div>
                        </div>
                        <input class="field input amount" type="number" name="amount" placeholder="Amount" autocomplete="off" required>
                        <div class="btnwrapper">
                            <button type="submit">Top Up</button>
                        </div>
                    </form>
                    <form class="pay" id="paypal">
                        <input class="field input" type="text" placeholder="PayPal Login" required>
                        <input class="field input" type="password" placeholder="Password" required>
                        <input class="field input amount" type="number" name="amount" placeholder="Amount" autocomplete="off" required>
                        <div class="btnwrapper">
                            <button type="submit">Top Up</button>
                        </div>
                    </form>
                    <form class="pay" id="qiwi">
                        <input class="field input" type="text" placeholder="Qiwi Login" required>
                        <input class="field input" type="password" placeholder="Password" required>
                        <input class="field input amount" type="number" name="amount" placeholder="Amount" autocomplete="off" required>
                        <div class="btnwrapper">
                            <button type="submit">Top Up</button>
                        </div>
                    </form>
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
                    <form>
                        <div class="two">
                            <input type="text" class="field input wish" placeholder="What is Your Wish?" required>
                            <input class="field input wish link" type="text" placeholder="Link to your desired product..." required>
                        </div>
                        <div class="confirm">
                            <input type="text" class="field input street" placeholder="Street Name" required>
                            <input type="text" class="field input house" placeholder="House Number" required>
                            <input type="text" class="field input flat" placeholder="Falt (optional)">
                            <input type="text" class="field input city" placeholder="City" required>
                            <input type="text" class="field input zip" placeholder="Zip Code" required>
                            <input type="text" class="field input country" placeholder="Country" required>
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
    <script src="../JS/jquery.js"></script>
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

    </script>
</body>

</html>
