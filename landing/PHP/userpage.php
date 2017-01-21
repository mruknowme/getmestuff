<!DOCTYPE html>
<html>

<head>
    <link href="../CSS/userpage_style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather:700|Open+Sans" rel="stylesheet">
    <meta charset="utf-8">
    <title>Your Account</title>
</head>

<body>
    <?php require_once("userheader.php"); ?>
    <div class="sitecontent">
        <main>
            <aside class="usernav">
                <ul>
                    <li><a class="tab active" href="javascript:void(0)" onclick="openTab(event, 'settings')">Account Settings</a></li>
                    <li><a class="tab" href="javascript:void(0)" onclick="openTab(event, 'money')">Top Up</a></li>
                    <li><a class="tab" href="javascript:void(0)" onclick="openTab(event, 'achievements')">Achievements</a></li>
                    <li><a class="tab" href="javascript:void(0)" onclick="openTab(event, 'wish')">Make a Wish</a></li>
                </ul>
            </aside>
            <div class="maincontent">
                <section class="accountsettings formcontent" id="settings">
                    <h1>Edit Profile</h1>
                    <form>
                        <div class="mainformcontent">
                            <div class="topprofile">
                                <input type="text" name="firstname" placeholder="Your Name" autocomplete="off">
                                <input type="text" name="lastname" placeholder="Your Last Name" autocomplete="off">
                                <input type="email" name="mail" placeholder="Your Email" autocomplete="off">
                                <div class="wrapper">
                                    <input type="password" name="paswd" placeholder="Your Password">
                                </div>
                            </div>
                            <div class="optionrow one">
                                <input type="checkbox">
                                <label>Show password</label>
                            </div>
                        </div>
                        <div class="confirm">
                            <p class="field">Please enter your current password to confirm changes:</p>
                            <input class="field input" type="password" name="currentpaswd" placeholder="Your Current Password" required>
                            <div class="optionrow">
                                <input type="checkbox">
                                <label>Show password</label>
                            </div>
                        </div>
                        <div class="btnwrapper">
                            <button type="submit">Save Changes</button>
                        </div>
                    </form>
                </section>
                <section class="topup formcontent" id="money">
                    <h1>Top Up Your Wallet</h1>
                    <select class="input" id="myselect">
                        <option value="credit" selected="selected" onclick="selectForm('credit')">Credit Card</option>
                        <option value="paypal" onclick="selectForm('paypal')">PayPal</option>
                        <option value="qiwi" onclick="selectForm('qiwi')">Qiwi</option>
                    </select>
                    <form class="pay" id="credit">
                        <input class="field input name" type="text" placeholder="Cardholder's Name" required>
                        <div class="topuprow">
                            <input class="input card" type="text" name="card" placeholder="Card Number" autocomplete="off" required>
                            <input class="input ccv" type="text" name="ccv" placeholder="CCV" autocomplete="off" required>
                        </div>
                        <div class="daterow">
                            <select class="input month" required>
                           <option>Month</option>
                            <option>January</option>
                            <option>Febuary</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                            <select class="input year" required>
                            <option>Year</option>
                            <option>2017</option>
                        </select>
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
                </section>
                <section class="createwish formcontent" id="wish">
                    <h1>Make a Wish</h1>
                    <form>
                        <input class="field input wish" type="text" placeholder="Link to your desired product..." required>
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
    <script src="login.js"></script>
</body>

</html>
