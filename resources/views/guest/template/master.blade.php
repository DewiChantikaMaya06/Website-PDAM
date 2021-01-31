<!doctype html>
<html class="no-js" lang="zxx">
    @include('guest.template.header')
    <body>
        @include('guest.template.navbar')
            @yield('content')
        @include('guest.template.footer')
        @include('guest.template.script')
    </body>
</html>