<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.preloader')   
    @include('layouts.head')
    @include('layouts.links')
</head>
<body>
    @include('layouts.navbar')

    @yield('content')
    
    @include('layouts.footer')
    @include('layouts.scripts')
</body>
</html>