<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/toastr.css">
    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="/js/toastr.js"></script>
    <script>
        toastr.options.positionClass = "toast-top-center";
        toastr.options.timeout = 4000;
        toastr.options.closeButton = true;
    </script>
</head>
<body>
@include('layouts._header')

<div class="container">
    <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
    </div>
</div>
</body>
</html>