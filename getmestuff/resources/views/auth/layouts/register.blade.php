<div class="form mw" id="signup">
    <h1>Sign Up</h1>
    <form class="mw vertical center" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
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