<section class="flex vertical start bg-white main-section" id="money">
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