<login inline-template>
    <div class="form pos-r mw flex vertical center">
        <h1>Welcome Back</h1>
        <form class="vertical center mw" method="POST" action="{{ route('login') }}" id="loginform" data-parsley-validate>
            {{ csrf_field() }}
            <div class="mw">
                <div class="pos-r mw">
                    <input @blur="valueCheck($event)" data-parsley-trigger="change" type="email" id="loginmail" name="email" autocomplete="off" required>
                    <label class="animated">Email Address</label>
                </div>
                <div class="pos-r mw">
                    <input @blur="valueCheck($event)" type="password" id="loginpass" name="pass" autocomplete="off" required>
                    <label class="animated">Passowrd</label>
                </div>
            </div>
            <button class="mw" type="submit">Log In</button>
        </form>
        <div class="pos-a forgot">
            <p>Forgot Password?</p>
        </div>
    </div>
</login>