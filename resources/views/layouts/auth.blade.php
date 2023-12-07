<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>

    <script type="module" crossorigin src="{{asset('assets/main-9493df59.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/main-35619697.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
@yield('content')
<button class="scroll-top-button btn text-white" id="scrollTopButton" type="button" style="opacity: 0">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 40 40" fill="none">
        <rect width="40" height="40" rx="20" transform="matrix(1 0 0 -1 0 40)" fill="url(#paint0_linear_65_15913)"/>
        <path d="M19.6666 28L19.6666 12" stroke="url(#paint1_linear_65_15913)" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"/>
        <path d="M17 14.6667L19.6667 12L22.3334 14.6667" stroke="url(#paint2_linear_65_15913)" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round"/>
        <defs>
            <linearGradient id="paint0_linear_65_15913" x1="20" y1="0" x2="20" y2="41.875"
                            gradientUnits="userSpaceOnUse">
                <stop stop-color="#407781" stop-opacity="0"/>
                <stop offset="1" stop-color="#6AF7FB"/>
            </linearGradient>
            <linearGradient id="paint1_linear_65_15913" x1="19.6666" y1="20" x2="18.6666" y2="20"
                            gradientUnits="userSpaceOnUse">
                <stop stop-color="#407781"/>
                <stop offset="1" stop-color="#407781" stop-opacity="0"/>
            </linearGradient>
            <linearGradient id="paint2_linear_65_15913" x1="22.3334" y1="13.3333" x2="17" y2="13.3333"
                            gradientUnits="userSpaceOnUse">
                <stop stop-color="#407781"/>
                <stop offset="1" stop-color="#407781"/>
            </linearGradient>
        </defs>
    </svg>
</button>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(session()->has('success'))
    <script>
        toastr.success("{{\Illuminate\Support\Facades\Session::get('success')}}")
    </script>
@endif
@stack('scripts')
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6570edf2ff45ca7d478793e9/1hh0i2vo6';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
