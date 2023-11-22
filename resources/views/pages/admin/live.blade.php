@extends('pages.admin.layoutes.app')
@section('title', ' البث المباشر')
@section('content')
 <section class="css-main">
{{--        <div class="container">--}}
{{--            <iframe  class="responsive-iframe" src="{{$meeting_start}}"></iframe>--}}
{{--        </div>--}}
        <div id="content">
            <iframe width="100%" height="100%" frameborder="0" src="{{$meeting_start}}"></iframe>
        </div>
    </section>

@endsection
