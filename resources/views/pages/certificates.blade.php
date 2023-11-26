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
                <form id="form1" class="mt-4" action="{{route('attendance')}}" method="POST" novalidate="">
                    @csrf
                    <div class="row">
                        <h4 class="h4 text-dark fw-semibold mb-4">ابحث برقم الجوال للحصول علي الشهادة</h4>
                        <div class="col-12 mb-4">
                            <label class="form-label text-dark-emphasis" for="phone">رقم الجوال<span
                                    class="d-inline-block text-red">*</span></label>
                            <div class="input-group mb-3">
                                <input class="form-control" id="phone" type="tel" name="phone" placeholder="رقم الجوال"
                                       required=""/><span class="input-group-text" id="basic-addon1">+٩٦٦</span>
                            </div>
{{--                            @if(session()->has('attended') && session()->get('attended') == false)--}}
{{--                                <div class="alert alert-danger" role="alert">لا توجد شهادة لهذا المستخدم--}}
{{--                                   </div>--}}
{{--                            @endif--}}
                        </div>
                        <div class="col-12 d-flex pt-4">
                            <button form="form1" class="js-next btn btn-primary text-white py-md px-6 w-100" type="submit" value="Submit">بحث
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
