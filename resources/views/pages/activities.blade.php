@extends('layouts.app')

@section('title', 'الفعاليات')

@section('content')
    @include('components.activities')
    {{--  --}}
    @include('components.statistics')
    {{--  --}}
    @include('components.partners')
@endsection
