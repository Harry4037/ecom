<!DOCTYPE html>
<html lang="en">
    @include('layouts.site.header')
    <body>          
        @include('layouts.site.header-bar') 

        @yield('content')

        @include('layouts.site.login-signup')
        @include('layouts.site.footer')
        @include('layouts.site.cart-sidebar')
        @include('layouts.site.javascripts')
        
        @yield('script')
    </body>
</html>