<website-header inline-template>
    <header class="around mw">
        <div class="col-12 mh flex between mw">
            <h3 class="navtitle">GetMeStuff</h3>
            <p @click="toggle()" :class="{ active : show }" class="mobile"><i class="fa fa-bars" aria-hidden="true"></i></p>
            <nav :style="{ right : position }" class="mw">
                <ul class="mw between">
                    @if (Auth::guest())
                        <li><a class="link" href="/">Главная</a></li>
                        <li><a class="link" href="/about">О нас</a></li>
                        <li><a class="link" href="/login">Войти</a></li>
                        <li><a class="link" href="/register">Зарегестрироваться</a></li>
                        <li><a class="">EN</a> | <a class="">РУ</a></li>
                    @else
                        <li><a class="user-link" href="/home">Профиль</a></li>
                        <li><a class="user-link" href="/wishes">Желания</a></li>
                        @if (auth()->user()->isAdmin())
                            <li><a class="user-link" target="_blank" href="/admin/dashboard">Панель</a></li>
                        @endif
                        <li class="notification-link pos-r flex center">
                            <a class="user-link" href="/notifications">Уведомления</a>
                            <div class="unread flex center" v-if="unreadNotifications">
                                <span v-text="unreadCount"></span>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                               class="user-link"
                               onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                Выйти
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