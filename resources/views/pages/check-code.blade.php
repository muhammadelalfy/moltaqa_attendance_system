@extends('layouts.app')

@section('title', 'استخراج الشهادات')

@section('content')
    {{-- --}}
    <div class="position-relative z-3 start-0 w-100 css-box-over-header">
        <div class="container">
            <div class="bg-white rounded-3 p-5 border">
                <div class="border-bottom">
                    <h2 class="h2 text-dark fw-bold mb-4">استخراج الشهادة</h2>
                </div>
                <form id="form1" class="mt-4" action="{{route('check_code')}}" method="POST" novalidate="">
                    @csrf
                        <div class="row" >
                            <div class="col-12 mb-4">
                                <label class="form-label text-dark-emphasis" for="otp">رمز التحقق<span
                                        class="d-inline-block text-red">*</span></label>
                                <input class="form-control" id="otp" type="text" name="otp" placeholder="رمز التحقق"
                                       required=""/>
                            </div>
{{--                            @if(session()->has('attended') && session()->get('attended') == false)--}}
{{--                                <div class="alert alert-danger" role="alert"> عفوا الكود غير صحيح--}}
{{--                                </div>--}}
{{--                            @endif--}}
                            <div class="col-12 d-flex pt-4">
                                <button class="js-next btn btn-primary text-white py-md px-6 w-100" type="submit">
                                    استخراج الشهادة
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>


@endsection
