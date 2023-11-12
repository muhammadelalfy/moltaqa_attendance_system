<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <script type="module" crossorigin src="{{asset('./assets/main-9493df59.js')}}"></script>
    <link rel="stylesheet" href="{{asset('./assets/main-35619697.css')}}">
</head>
<body>
@if(Request::is('register'))
    @include('components.headerForRegister')
@else
    @include('components.header')

@endif
@yield('content')
@include('components.footer')
</body>
</html>

