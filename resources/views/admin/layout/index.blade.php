<!doctype html>
<html lang="en">
<head>
    @include('admin.layout.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
@yield('preload-js')
    <div class="wrapper">
        @include('admin.navigation.index')
        <div class="content-wrapper" style="padding-left: 20px; padding-right: 20px">

            @yield('body')

        </div>
        @include('admin.layout.footer')
    </div>
    @include('admin.partials.js')
</body>
</html>
