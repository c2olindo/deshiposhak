<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.partials.meta')
    <title>Deshi Poshak | @yield('title') | Your online desi clothing store in Brampton, Ontario, Canada</title>
    @include('front.partials.css')
</head>

<body class="@yield('class')">
    @include('front.navigation.index')
    @yield('body')

    <a href="index3.html#" class="scroll_top" title="Scroll to Top" style="display: block;"><i class="fa fa-arrow-up"></i></a>
@include('front.footer')
@include('front.partials.js')
</body>
</html>
