<website-header inline-template>
    <header class="around mw">
        <div class="col-12 mh flex between mw">
            <h3 class="navtitle">GetMeStuff</h3>
            <p @click="toggle()" :class="{ active : show }" class="mobile"><i class="fa fa-bars" aria-hidden="true"></i></p>
            <nav :style="{ right : position }" class="mw">
                <ul class="mw between">
                    @if (Auth::guest())
                        <li><a class="link" href="/">Home</a></li>
                        <li><a class="link" href="/about">About Us</a></li>
                        <li><a class="link" href="/login">Log In</a></li>
                        <li><a class="link" href="/register">Sign Up</a></li>
                        <li><a class="">EN</a> | <a class="">RU</a></li>
                    @else
                        <li><a class="link" href="/home">Home</a></li>
                        <li><a class="link" href="/wishes">Wishes</a></li>
                        <li><a class="link" href="/notifications">Notifications</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>
</website-header>