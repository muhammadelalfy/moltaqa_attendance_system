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
    @include('components.header_without_image')
@elseif(Request::is('privacy-policy'))
    @include('components.header_without_image')
@elseif(Request::is('faqs'))
    @include('components.header_without_image')
@elseif(Request::is('attendance'))
    @include('components.header_without_image')
@else
    @include('components.header')

@endif
@yield('content')
@include('components.footer')
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
</body>
</html>

