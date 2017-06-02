<register inline-template>
    <div class="form mw" id="signup">
        <h1>Sign Up</h1>
        <form class="mw vertical center" method="POST" action="{{ route('register') }}" data-parsley-validate>
            {{ csrf_field() }}
            <div class="top-row flex start mw">
                <div class="pos-r w45">
                    <input @blur="valueCheck($event)" type="text" id="firstname" name="firstname" autocomplete="off" required>
                    <label class="animated">First Name</label>
                </div>
                <div class="pos-r w45">
                    <input @blur="valueCheck($event)" type="text" id="lastname" name="lastname" autocomplete="off" required>
                    <label class="animated">Last Name</label>
                </div>
            </div>
            <div class="mw">
                <div class="pos-r mw">
                    <input @blur="valueCheck($event)" data-parsley-trigger="change" class="inputsign" type="email" id="email" name="email" autocomplete="off" required>
                    <label class="animated">Email Address</label>
                </div>
                <div class="pos-r mw">
                    <input @blur="valueCheck($event)" data-parsley-trigger="change" minlength="8" class="inputsign" type="password" id="pass" name="password" autocomplete="off" required>
                    <label class="animated">Set a Password</label>
                </div>
                <div class="pos-r mw">
                    <input @blur="valueCheck($event)" data-parsley-trigger="change" data-parsley-equalto="#pass" class="inputsign" type="password" id="passcheck" name="passcheck" autocomplete="off" required>
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
</register>