<register inline-template>
    <div class="form mw" id="signup">
        <h1>Sign Up</h1>
        <form class="mw vertical center" method="POST" action="{{ route('register') }}" data-parsley-validate>
            {{ csrf_field() }}
            <div class="top-row flex start mw">
                <div class="pos-r w45">
                    <animated name="firstname" id="firstname" trigger="change" type="text">First Name</animated>
                </div>
                <div class="pos-r w45">
                    <animated name="lastname" id="lastname" trigger="change" type="text">Last Name</animated>
                </div>
            </div>
            <div class="mw">
                <div class="pos-r mw">
                    <animated name="email" id="email" trigger="change" type="email">Email Address</animated>
                </div>
                <div class="pos-r mw">
                    <animated name="password" minlength="8" id="pass" trigger="change" type="password">Set a Password</animated>
                </div>
                <div class="pos-r mw">
                    <animated name="passcheck" id="passcheck" trigger="change" equalto="#pass" type="password">Set a Password</animated>
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
</register>