<login inline-template>
    <div class="form pos-r mw flex vertical center">
        <h1>Welcome Back</h1>
        <form class="vertical center mw" method="POST" action="{{ route('login') }}" id="loginform" data-parsley-validate>
            {{ csrf_field() }}
            <div class="mw">
                <div class="pos-r mw">
                    <animated name="email" id="loginmail" trigger="change" type="email">Email Address</animated>
                </div>
                <div class="pos-r mw">
                    <animated name="pass" id="loginpass" trigger="change" type="password">Passowrd</animated>
                </div>
            </div>
            <button class="mw" type="submit">Log In</button>
        </form>
        <div class="pos-a forgot">
            <p>Forgot Password?</p>
        </div>
    </div>
</login>