<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="{{ asset('admin/plugins/images/users/varun.jpg') }}" alt="user-img" class="img-circle"></div> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->first_name.' '.auth()->user()->last_name }}<span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="#"><i class="ti-wallet"></i> My Finances</a></li>
                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="login.php"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            <li class="nav-small-cap m-t-10">--- Main Menu</li>
            <li>
                <a href="javascript:void(0);" class="waves-effect">
                    <i class="icon-magic-wand"></i>
                    <span class="hide-menu">Wishes<span class="fa arrow"></span>
                        @if ($reported > 0)
                            <span class="label label-rouded label-red pull-right">{{ $reported }}</span>
                        @endif
                    </span>
                </a>
                <ul class="nav nav-second-level">
                    <li> <a href="/admin/wishes">All Wishes</a> </li>
                    <li> <a href="/admin/wishes/reported">Reported Wishes</a> </li>
                    <li> <a href="/admin/wishes/address">Wishes' Address</a> </li>
                    <li> <a href="/admin/wishes/settings">Settings</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people"></i> <span class="hide-menu"> Users <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="/admin/users">All Users</a> </li>
                    <li> <a href="/admin/users/activity">User Activity</a> </li>
                    <li> <a href="/admin/users/settings">Settings</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-badge"></i> <span class="hide-menu"> Achievements <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="/admin/achievements">All Achievements</a> </li>
                    <li> <a href="/admin/achievements/prizes">All Prizes</a> </li>
                    <li> <a href="/admin/achievements/new">New Achievement</a> </li>
                    <li> <a href="/admin/achievements/settings">Settings</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="6"></i> <span class="hide-menu"> Support <span class="fa arrow"></span> <span class="label label-rouded label-warning pull-right">4</span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="/admin/tickets">All</a> </li>
                    <li> <a href="/admin/tickets/open">Open</a> </li>
                    <li> <a href="/admin/tickets/create">Create</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="Y"></i> <span class="hide-menu"> Settings <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="/admin/settings">General</a> </li>
                    <li> <a href="admin/payment">Payment</a> </li>
                </ul>
            </li>
            <li>
                <a href="/admin/logout"
                   class="waves-effect"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span>
                </a>

                <form id="logout-form" action="/admin/logout" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
</div>
<!-- Left navbar-header end -->