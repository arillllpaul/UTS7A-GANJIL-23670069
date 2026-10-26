<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.admin.head')
</head>
<body>
    <!-- BEGIN #app -->
    <div id="app" class="app app-full-height app-without-header">
        @yield('content')
    </div>
    <!-- END #app -->

    @include('layouts.admin.scripts')
</body>
</html>