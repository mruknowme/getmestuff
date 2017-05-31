<!DOCTYPE html>
<html class="overflow-visible user-bg userpage">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GetMeStuff | Daniil Belov</title>

    <link rel="stylesheet" type="text/css" href="assets/styles/main.css">
</head>

<body class="overflow-visible">
    <?php require_once("app/block/header.php"); ?>
    <main class="col-12 mw mh m-auto main-fix">
        <section class="mw flex between user-info">
            <p>Daniil Belov</p>
            <p>123.95$</p>
        </section>
        <div class="mw mh flex s-between">
            <div class="main-content">
                <ul class="tabs">
                    <li class="active" data-tab="settings">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <span>Settings</span>
                    </li>
                    <li data-tab="money">
                        <i class="fa fa-money" aria-hidden="true"></i>
                        <span>Wallet</span>
                    </li>
                    <li data-tab="achievtab">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span>Achievements</span>
                    </li>
                    <li data-tab="wish">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        <span>Make a Wish</span>
                    </li>
                </ul>
                <div>
                    <section style="display: block;" class="flex vertical start bg-white main-section" id="settings">
                        <h2>Edit Profile</h2>
                        <form class="mw vertical center">
                            <div class="mw">
                                <input type="text" id="firstname" name="firstname" placeholder="Your Name" autocomplete="off">
                                <input type="text" id="lastname" name="lastname" placeholder="Your Last Name" autocomplete="off">
                                <input type="email" id="email" name="email" placeholder="Your Email" autocomplete="off">
                                <div>
                                    <input type="password" id="paswd" name="paswd" placeholder="Edit Password">
                                </div>
                            </div>
                            <div class="divisor divisor-bg mw">
                                <p><i class="fa fa-key" aria-hidden="true"></i><span>Please enter your current password to confirm changes:</span></p>
                                <input type="password" id="currentpaswd" name="currentpaswd" placeholder="Your Current Password" autocomplete="off">
                                <!-- <span>
                                    <i aria-hidden="true"></i>
                                    <i aria-hidden="true"></i>
                                </span> -->
                            </div>
                            <div class="self-start">
                                <button type="submit">Save Changes</button>
                            </div>
                        </form>
                    </section>
                    <section class="flex vertical start bg-white main-section" style="display: none" id="money">
                        <h2>Top Up Your Wallet</h2>
                        <div>
                            <div class="flex start select">
                                <div class="w45 dropdown m-auto">
                                    <a id="menutitle">Credit Card</a>
                                    <div id="paymentmethod" style="display: none">
                                        <a><i class="fa fa-credit-card" aria-hidden="true"></i> Credit Card</a>
                                        <a><i class="fa fa-paypal" aria-hidden="true"></i> PayPal</a>
                                        <a><i class="fa fa-google-wallet" aria-hidden="true"></i> Qiwi</a>
                                    </div>
                                </div>
                                <form class="pos-r w45 m-auto">
                                    <input placeholder="Amount">
                                    <i class="icn-pos fa fa-usd" aria-hidden="true"></i>
                                </form>
                            </div>
                            <form class="vertical center" id="credit">
                                <div></div>
                                <div class="mw">
                                    <div class="mw flex">
                                        <div class="w45 m-auto">
                                            <input type="text" id="methodcard" name="methodcard" placeholder="Card Number" autocomplete="off" maxlength="19">
                                        </div>
                                        <div class="w45 m-auto">
                                            <input id="holdername" name="holdername" type="text" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="mw flex">
                                        <div class="w45 m-auto">
                                            <input id="mmyy" name="mmyy" type="text" placeholder="mm/yy" autocomplete="off" maxlength="7">
                                        </div>
                                        <div class="w45 m-auto">
                                            <input type="text" id="cc" name="cc" placeholder="CCV" autocomplete="off" maxlength="3">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit">Top Up</button>
                                </div>
                            </form>
                            <form class="vertical start" id="paypal">
                                <div class="w5">
                                    <input type="text" placeholder="PayPal Login" required>
                                </div>
                                <div class="w5">
                                    <input type="password" placeholder="Password" required>
                                </div>
                                <div>
                                    <button type="submit">Top Up</button>
                                </div>
                            </form>
                            <form class="vertical start" id="qiwi">
                                <div class="w5">  
                                    <input type="text" placeholder="Qiwi Login" required>
                                </div>
                                <div class="w5">
                                    <input type="password" placeholder="Password" required>
                                </div>
                                <div>
                                    <button type="submit">Top Up</button>
                                </div>
                            </form>
                        </div>
                    </section>
                    <section class="flex vertical start bg-white main-section" style="display: none" id="achievements">
                        <h2>Your Achievements</h2>
                        <div class="flex nc-between">
                            <div class='donated'>
                                <div>
                                    <p>Donated:</p>
                                    <p><span>1000</span>$</p>
                                </div>
                                <div>
                                    <p>Recieved:</p>
                                    <p><span>10000</span>$</p>
                                </div>
                            </div>
                            <div class="w8 achievements-info">
                                <div class="pos-r stars flex nc-between">
                                    <div class="w8 star-info">
                                        <p>Use points to get an extra <a>Wish</a> (200 points)</p>
                                        <p>(Click on a badge for more info.)</p>
                                    </div>
                                    <p>123 <i class="currency fa fa-star" aria-hidden="true"></i></p>
                                </div>
                                <div>
                                    <div class="badge">
                                        <div class="radial"></div>
                                        <img src="assets/img/badge.svg">
                                        <p>Donator(36%)</p>
                                        <div class="tool-tip" style="display: none">
                                            <h4>Donator - 20 <i class="fa fa-star" aria-hidden="true"></i></h4>
                                            <p>Donate 300$ - 108$/300$</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="flex vertical start bg-white main-section" style="display: none" id="wish">
                        <h2>Make a Wish</h2>
                        <form class="vertical center mw">
                            <div class="vertical mw center">
                                <div class="mw">
                                    <input type="text" name="yourwish" placeholder="What is Your Wish?" required>
                                </div>
                                <div class="mw">
                                    <input type="text" name="linkwish" placeholder="Link to your desired product..." required>
                                </div>
                            </div>
                            <div class="mw divisor divisor-bg">
                                <p><i class="fa fa-address-card-o" aria-hidden="true"></i><span>Please provide your full address:</span></p>
                                <div class="mw">
                                    <input type="text" name="streetone" placeholder="Address 1" required>
                                </div>
                                <div class="mw">
                                    <input type="text" name="streettwo" placeholder="Address 2 (optional)">
                                </div>
                                <div class="mw flex between">
                                    <div class="w3">
                                        <input type="text" name="city" placeholder="City" required>
                                    </div>
                                    <div class="w3">
                                        <input type="text" name="zip" placeholder="Zip Code" required>
                                    </div>
                                    <div class="w3">
                                        <input type="text" name="country" placeholder="Country" required>
                                    </div>
                                </div>
                            </div>
                            <div class="self-start">
                                <button type="submit">Make Your Wish</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            <div class="wishes flex vertical between w4">
                <div class="wish mw">
                    <h3>Your Current Wish</h3>
                    <div class="content">
                        <div class="header">
                            <h4>iPhone 6</h4>
                            <p>23/12/16</p>
                        </div>
                        <div class="progress">
                            <p>Progress</p>
                            <div class="progress-bar">
                                <div></div>
                            </div>
                        </div>
                        <div class="footer">
                            <p>Collected: 40 000/70 000</p>
                        </div>
                    </div>
                </div>
                <div class="wish mw">
                    <h3>Random Wish</h3>
                    <div class="content">
                        <div class="header">
                            <h4>iPhone 6</h4>
                            <p>23/12/16</p>
                        </div>
                        <div class="progress">
                            <p>Progress</p>
                            <div class="progress-bar">
                                <div></div>
                            </div>
                        </div>
                        <div class="footer">
                            <p>Collected: 40 000/70 000</p>
                            <form>
                                <input type="number" name="amount" required>
                                <button type="submit">Donate</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once("app/block/footer.php") ?>
</body>

</html>
