<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('head')
    </head>
    <body>
    @yield('header')
    <div class="container">
            @yield('content')
    </div>
    @yield('footer')
    </body>
</html>
