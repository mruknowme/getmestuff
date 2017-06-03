<website-header inline-template>
    <header class="around mw">
        <div class="col-12 mh flex between mw">
            <h3 class="navtitle">GetMeStuff</h3>
            <p @click="toggle()" :class="{ active : show }" class="mobile"><i class="fa fa-bars" aria-hidden="true"></i></p>
            <nav :style="{ right : position }" class="mw">
                <ul class="mw between">
                    <li><a class="link" href="/">Home</a></li>
                    <li><a class="link" href="/about">About Us</a></li>
                    <li><a class="link" href="/login">Log In</a></li>
                    <li><a class="link" href="/register">Sign Up</a></li>
                    <li><a class="">EN</a> | <a class="">RU</a></li>
                </ul>
            </nav>
        </div>
    </header>
</website-header>