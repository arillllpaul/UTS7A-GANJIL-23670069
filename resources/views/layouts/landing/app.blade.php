<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.landing.head')
</head>
<body>
{{-- header --}}
    @include('layouts.landing.header')
{{-- isian body --}}
    @yield('content')
{{-- footernya --}}
    @include('layouts.landing.footer')
{{-- js untuk design --}}
    @include('layouts.landing.scripts')
</body>
</html>