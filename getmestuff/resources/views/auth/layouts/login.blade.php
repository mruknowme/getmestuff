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
                    <animated name="password" id="loginpass" trigger="change" type="password">Password</animated>
                </div>
            </div>
            <div class="w5 self-start">
                <label class="terms flex start-center checkbox-login">
                    <input type="checkbox" name="remember" checked> <span>Remember me</span>
                </label>
            </div>
            <button class="mw" type="submit">Log In</button>
        </form>
        <div class="pos-a forgot">
            <p class="hover" @click="showForm()">Forgot Password?</p>
            @include ('auth.passwords.email')
        </div>
    </div>
</login>