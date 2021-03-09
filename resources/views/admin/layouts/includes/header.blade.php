<nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        <form role="search" class="navbar-form-custom" action="search_results.html">
            <div class="form-group">
                <input type="text" placeholder="Search for something..." class="form-control" name="top-search"
                       id="top-search">
            </div>
        </form>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <li>
{{--            <span class="m-r-sm text-muted welcome-message">{{ strip_tags($_siteConfigs['company']) }}</span>--}}
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                <i class="fa fa-tasks"></i>
            </a>
        </li>
        <li class="dropdown dropdown-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <span class="username username-hide-on-mobile"> {{auth()->user()->name }} </span>
                <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-default">
                <li><a class="dropdown-item" href="{{ route('admin.profile') }}"> <i class="fa fa-users"></i> Profile</a></li>
                <li>
                    <a href="javascript:void(0);"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>
                        Log Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {!! csrf_field() !!}
                    </form>
                </li>
            </ul>
        </li>
{{--        <li>--}}
{{--            <a class="right-sidebar-toggle">--}}
{{--                <i class="fa fa-tasks"></i>--}}
{{--            </a>--}}
{{--        </li>--}}
    </ul>

</nav>
