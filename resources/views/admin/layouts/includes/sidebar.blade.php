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
            <li {{Request::is('admin/population*')?'class=active':''}}>
                <a href="#">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">Section</span>
                    <span class="fa arrow"></span>
                </a>
                    <ul class="nav nav-second-level {{Request::is(Request::is('admin/population*'))
                       ?'collapse in':'collapse'}}">
                        <li {{Request::is('admin/population')?'class=active':''}}>
                            <a href="{{ route('admin.population.index') }}"><span class="nav-label">Population</span> </a>
                        </li>
                    </ul>
                </li>
            <li
                {{Request::is('admin/district') || Request::is('admin/municipalities')?'class=active':''}}>
                <a href="#">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">Setup</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level {{Request::is('admin/district*'|| Request::is('admin/district*'))
                       ?'collapse in':'collapse'}}">
                    <li {{Request::is('admin/district')?'class=active':''}}>
                        <a href="{{ route('admin.district.index') }}"><span class="nav-label">District</span> </a>
                    </li>
                    <li {{Request::is('admin/municipalities')?'class=active':''}}>
                        <a href="{{ route('admin.municipality.index') }}"><span class="nav-label">Municipalities</span> </a>
                    </li>
                </ul>
            </li>
           </ul>
    </div>
</nav>
