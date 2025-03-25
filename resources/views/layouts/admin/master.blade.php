<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('layouts.admin.style')
    @stack('styles')
</head>

<body>
    <div class="container-fluid main-page">

        <div class="app-main">
            @include('layouts.admin.sidebar')
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts.admin.script')
    @stack('script')
</body>

</html>