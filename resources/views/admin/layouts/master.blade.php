@include('admin.layouts.includes.head')

<body>
<div id="wrapper">

    @include('admin.layouts.includes.sidebar')
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            @include('admin.layouts.includes.header')
        </div>

        @yield('content')

        @include('admin.layouts.includes.copyright-section')
    </div>

    {{--    @include('admin.layouts.includes.right-sidebar')--}}
</div>
@include('admin.layouts.includes.footer')
