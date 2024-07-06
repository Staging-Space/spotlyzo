<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=utf-8>
    <meta content="width=device-width,initial-scale=1,minimum-scale=1" name=viewport>
    <meta content="ie=edge" http-equiv=x-ua-compatible>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="XynoSync (info@xynosync.com)" name="author">
    <title>Admin Panel</title>
    <link href="{{ asset('images/admin/favicon.png') }}" rel="icon" type="image/png">
    <link href="{{ asset('css/admin/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/halfmoon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/halfmoon-elegant.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
</head>

<body {{ $id != 'authentication.login' ? 'class="ps-xxl-sbwidth"' : '' }}>
    @include('components.includes.admin.header')
    @yield('content')
    <script src="{{ asset('js/admin/bootstrap.js') }}"></script>
    <script src="{{ asset('js/admin/script.js') }}"></script>
</body>

</html>
