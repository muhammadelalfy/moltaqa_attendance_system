@extends('layouts.auth')

@section('title', 'استخراج الشهادات')

@section('content')
    <svg id="certificateSVG" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <image id="certificateImage"
></image>
    </svg>
{{--    <div class="css-certificate mb-3">--}}
{{--        <svg id="certificateSVG" version="1.1" xmlns="http://www.w3.org/2000/svg">--}}
{{--            <!-- Your fixed background image or design-->--}}
{{--            <image id="certificateImage"--}}
{{--                   xlink:href="{{asset('images/remote-presence.jpg')}}" x="0"--}}
{{--                   y="0"></image>--}}
{{--            <!-- Text element for the user name-->--}}
{{--            <text x="400" y="318" text-anchor="middle" font-family="Arial"--}}
{{--                  font-weight="bold" font-size="18"--}}
{{--                  fill="#474747">{{auth()->user()->name}}</text>--}}
{{--            <!-- Placeholder for the QR code-->--}}

{{--            <image id="qrCode" xlink:href="images/qrcode.png" x="350" y="425" width="100" height="100"></image>--}}

{{--            <!-- Text element for the certificate ID-->--}}
{{--            <text id="certificateID" x="395" y="558" font-family="Arial"--}}
{{--                  font-weight="bold" font-size="16"--}}
{{--                  fill="#474747">{{$certificate_number}}</text>--}}
{{--        </svg>--}}
{{--    </div>--}}

@endsection
