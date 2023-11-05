@extends('layouts.layout')

@section('title')
  @yield('title')
@endsection

@section('body')
    <header class="css-header position-relative bg-opacity-25">
        <div class="css-header-overlay"></div>
        <div class="css-header-body position-relative z-2">
            @include('components.navbar')
            {{--  --}}
            <div class="css-header-content pb-12 pt-8">
                <div class="container">
                    <div class="row align-items-center css-header-row">
                        <div class="col-lg-6 text-white h-100">
                            <h1 class="h1 fw-bold lh-lg css-letter-spacing">
                                تقديم منظومة كاملة من الحلول النوعية والاستباقية وفق افضل الممارسات لوسائل التواصل
                                الاجتماعي
                                لتحقيق الاستقرار الاسري.
                            </h1>
                            <p class="fs-4 lead mb-5 mt-4">
                                الاستخدام الامثل لوسائل التواصل لاسرة سعيدة متماسكة
                            </p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                <a href="{{ route('signup-with-us') }}"
                                    class="btn btn-secondary text-white py-md fs-6 btn-lg px-6">
                                    إنضم لنا
                                </a>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-6 css-video-container overflow-hidden" id="jsVideoWrapper">
                            <img src="{{ asset('images/hero.jpeg') }}" alt="Hero" class="img-fluid w-100 h-100">
                            <div class="css-video-player-button position-absolute top-50 start-50">
                                <button id="jsPlayVideo" class="css-video-player-button-play btn p-1 rounded-circle"
                                    type="button" data-bs-toggle="modal" data-bs-target="#playVideo">
                                    @include('svgs.video-player')
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')
    {{-- Modal --}}
    @include('components.video-modal')
    {{-- loading screen --}}
    <div class="transition-screen  hide">
        <svg class="pl" viewBox="0 0 200 200" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="pl-grad1" x1="1" y1="0.5" x2="0" y2="0.5">
                    <stop offset="0%" stop-color="hsl(313,90%,55%)" />
                    <stop offset="100%" stop-color="hsl(223,90%,55%)" />
                </linearGradient>
                <linearGradient id="pl-grad2" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="hsl(313,90%,55%)" />
                    <stop offset="100%" stop-color="hsl(223,90%,55%)" />
                </linearGradient>
            </defs>
            <circle class="pl__ring" cx="100" cy="100" r="82" fill="none" stroke="url(#pl-grad1)"
                stroke-width="36" stroke-dasharray="0 257 1 257" stroke-dashoffset="0.01" stroke-linecap="round"
                transform="rotate(-90,100,100)" />
            <line class="pl__ball" stroke="url(#pl-grad2)" x1="100" y1="18" x2="100.01" y2="182"
                stroke-width="36" stroke-dasharray="1 165" stroke-linecap="round" />
        </svg>
    </div>
@endsection
