<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.admin.head')

    @yield('styles')
</head>
<body>
    <div id="app" class="app">
        @include('layouts.admin.header')

        <div id="content" class="app-content">
            @yield('content')
        </div>

        @include('layouts.admin.footer')
    </div>

    @include('layouts.admin.scripts')
@yield('scripts')
</body>
</html>