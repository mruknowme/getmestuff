<div class="form pos-r mw flex vertical center">
    <h1>Welcome Back</h1>
    <form class="vertical center mw" method="POST" action="{{ route('login') }}" id="loginform">
        {{ csrf_field() }}
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