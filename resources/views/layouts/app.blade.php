<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <script type="module" crossorigin src="{{asset('./assets/main-9493df59.js')}}"></script>
    <link rel="stylesheet" href="{{asset('./assets/main-35619697.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(session()->has('success'))
    <script>
        toastr.success("{{session()->get('success')}}");
    </script>
@endif
@if(session()->has('error'))
    <script>
        toastr.error("{{session()->get('error')}}");
    </script>
@endif
</body>
</html>

