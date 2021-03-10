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
            <li>
                <a href="#">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">Section</span>
                    <span class="fa arrow"></span>
                </a>
                    <ul class="nav nav-second-level">
                        <li {{Request::is('admin/hospital')?'class=active':''}}>
                            <a href="{{ route('admin.hospital.index') }}"><span class="nav-label">Hospital</span> </a>
                        </li>
                        <li ><a href="">
                                <i class="fa fa-user"></i>Publisher</a>
                        </li>
                    </ul>
                </li>

           </ul>
    </div>
</nav>
