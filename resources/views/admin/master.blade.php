<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('tieudetrangadmin')</title>

    <link rel="icon" href="{{ asset('../public/img/core-img/favicon.ico') }}">

<!-- Core Stylesheet -->
    <link href="{{asset('public/css/admin/style.css')}}" rel="stylesheet">
    <script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>

<!-- Responsive CSS -->


</head>
<body>
    @include('admin.layout.header')
    @include('admin.layout.nav')
    <main role="main">
    @yield('contentadmin')
    </main>


</body>
</html>
