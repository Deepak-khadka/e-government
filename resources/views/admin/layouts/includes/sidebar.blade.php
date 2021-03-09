    <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">

                @if(Auth::check())
                    @php
                        $folder_name = 'users';
                    @endphp
                    <div class="dropdown profile-element">
                        @if(auth()->user() && isset(auth()->user()->photo))
                            <img alt="image" class="rounded-circle"
                                 src="{{ ViewHelper::getImagePath($folder_name,auth()->user()->photo) }}"
                                 style="height: 75px; width:75px;"/>
                        @endif
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">
                                {{ auth()->user()->name }}
                        </span>

                        </a>
                    </div>
                @endif
                <div class="logo-element">
                   {{config('app.name')}}
                </div>
            </li>
                <li {{Request::is('admin/dashboard*')?'class=active':''}}>
                    <a href=""><i class="fa fa-home"></i> <span
                            class="nav-label">Dashboard</span> </a>
                </li>
{{--                <li>--}}
{{--                    <a href="#"><i class="fa fa-home"></i> <span class="nav-label">HomePage Section</span><span class="fa arrow"></span></a>--}}
{{--                    <ul class="nav nav-second-level {{Request::is('admin/slider*')||Request::is('admin/publisher*')||Request::is('admin/developer*')--}}
{{--                       ||Request::is('admin/genre*')||Request::is('admin/platform*')||Request::is('admin/deliver-mode*')||Request::is('admin/deliver-time*')--}}
{{--                       ?'class=collapse in':'collapse'}}">--}}
{{--                        <li {{Request::is('admin/slider*')?'class=active':''}}>--}}
{{--                            <a href="{{route('admin.slider.index')}}"><span--}}
{{--                                        class="nav-label">Sliders</span> </a>--}}
{{--                        </li>--}}
{{--                        <li {{Request::is('admin/publisher')?'class=active':''}}><a href="{{ route('admin.publisher.index') }}">--}}
{{--                                <i class="fa fa-user"></i>Publisher</a>--}}
{{--                        </li>--}}
{{--                        <li {{Request::is('admin/developer')?'class=active':''}}>--}}
{{--                            <a href="{{ route('admin.developer.index') }}">--}}
{{--                                <i class="fa fa-file-text-o"></i> Developer</a>--}}
{{--                        </li>--}}
{{--                        <li {{Request::is('admin/genre')?'class=active':''}}>--}}
{{--                            <a href="{{ route('admin.genre.index') }}">--}}
{{--                                <i class="fa fa-file-text-o"></i> Genre</a>--}}
{{--                        </li>--}}

{{--                        <li {{Request::is('admin/platform')?'class=active':''}}>--}}
{{--                            <a href="{{ route('admin.platform.index') }}">--}}
{{--                                <i class="fa fa-file-text-o"></i> Platform</a>--}}
{{--                        </li>--}}

{{--                        <li {{Request::is('admin/deliver-mode')?'class=active':''}}>--}}
{{--                            <a href="{{ route('admin.deliver-mode.index') }}">--}}
{{--                                <i class="fa fa-file-text-o"></i> Deliver Mode</a>--}}
{{--                        </li>--}}

{{--                        <li {{Request::is('admin/deliver-time')?'class=active':''}}>--}}
{{--                            <a href="{{ route('admin.deliver-time.index') }}">--}}
{{--                                <i class="fa fa-file-text-o"></i> Deliver Time</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                <a href=""><i class="fa fa-shopping-cart"></i> <span class="nav-label">Pages</span><span class="fa arrow"></span></a>--}}
{{--                <ul class="nav nav-second-level  {{Request::is('admin/category*')|| Request::is('admin/product*')--}}
{{--                        ?'class=collapse in':'collapse'}}">--}}
{{--                    <li {{Request::is('admin/category')?'class=active':''}}>--}}
{{--                        <a href="{{ route('admin.category.index') }}">--}}
{{--                            <i class="fa fa-file-text-o"></i> category</a>--}}
{{--                    </li>--}}
{{--                    <li {{Request::is('admin/product')?'class=active':''}}>--}}
{{--                        <a href="{{ route('admin.product.index') }}">--}}
{{--                            <i class="fa fa-file-text-o"></i> Products</a>--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--            </li>--}}
{{--                <li>--}}
{{--                <a href=""><i class="fa fa-gears"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>--}}
{{--                <ul class="nav nav-second-level  {{Request::is('admin/users*')|| Request::is('admin/site-setting*')||--}}
{{--                    Request::is('admin/page*')||Request::is('admin/menu-sections*')?'class=collapse in':'collapse'}}">--}}

{{--                            <li {{Request::is('admin/site-setting*')?'class=active':''}}>--}}
{{--                                <a href="{{route('admin.sitesetting.edit')}}"><i class="fa fa-gears"></i> <span--}}
{{--                                            class="nav-label">Site Setting</span> </a>--}}
{{--                            </li>--}}

{{--                                    <li {{Request::is('admin/users')?'class=active':''}}><a href="{{ route('admin.users.index') }}">--}}
{{--                                            <i class="fa fa-user"></i>Users</a></li>--}}
{{--                        <li {{Request::is('admin/page')?'class=active':''}}><a--}}
{{--                                    href="{{ route('admin.page.index') }}"><i class="fa fa-file-text-o"></i> Page</a></li>--}}

{{--                </ul>--}}
{{--            </li>--}}

           </ul>
    </div>
</nav>
