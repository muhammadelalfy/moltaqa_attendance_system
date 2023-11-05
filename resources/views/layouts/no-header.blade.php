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
            <div class="css-header-content py-12"></div>
        </div>
    </header>
    <main class="pb-8">
      <div class="position-relative z-3 start-0 w-100 css-box-over-header">
        <div class="container">
            <div class="bg-white rounded-3 p-5">
              @yield('content')
            </div>
        </div>
      </div>
    </main>
    {{-- Footer --}}
    @include('components.footer')
@endsection
