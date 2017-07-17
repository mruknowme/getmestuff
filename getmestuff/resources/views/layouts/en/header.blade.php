<website-header inline-template>
    <header class="around mw">
        <div class="col-12 mh flex between mw">
            <h3 class="navtitle">GetMeStuff</h3>
            <p @click="toggle()" :class="{ active : show }" class="mobile"><i class="fa fa-bars" aria-hidden="true"></i></p>
            <nav :style="{ right : position }" class="mw">
                <ul class="mw between">
                    @if (Auth::guest())
                        <li><a class="link" href="/{{ $lang }}">Home</a></li>
                        <li><a class="link" href="/{{ $lang }}/about">About Us</a></li>
                        <li><a class="link" href="/{{ $lang }}/login">Log In</a></li>
                        <li><a class="link" href="/{{ $lang }}/register">Sign Up</a></li>
                        <li><a href="/lang/en" class="{{ ($lang == 'en') ? 'active' : '' }}">EN</a> | <a href="/lang/ru" class="{{ ($lang == 'ru') ? 'active' : '' }}">РУ</a></li>
                    @else
                        <li><a class="user-link" href="/{{ $lang }}/home">Home</a></li>
                        <li><a class="user-link" href="/{{ $lang }}/wishes">Wishes</a></li>
                        @if (auth()->user()->isAdmin())
                            <li><a class="user-link" target="_blank" href="/admin/dashboard">Dashboard</a></li>
                        @endif
                        <li><a class="user-link" href="/{{ $lang }}/contact">Contact</a></li>
                        <li class="notification-link pos-r flex center">
                            <a class="user-link" href="/{{ $lang }}/notifications">Notifications</a>
                            <div class="unread flex center" v-if="unreadNotifications">
                                <span v-text="unreadCount"></span>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                               class="user-link"
                               onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                Log Out
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