@extends('layouts.app')
@section('content')

    <div class="position-relative z-3 start-0 w-100 css-box-over-header">

        <div class="container">
            <div class="bg-white rounded-3 p-5 border">
                <h2 class="h2 text-dark fw-bold mb-4">{{Translation::trans('سجل معنا في الملتقي')}}</h2>
                <div class="pb-4">
                    <figcaption class="text-dark italic">{{Translation::trans('جميع الحقول مطلوبة')}}<span
                            class="d-inline-block text-red">*</span></figcaption>
                </div>
                <div class="row"></div>
                <div class="col-lg-12">
                    <form class="mt-4 js-validate" action="{{route('register')}}" method="POST" novalidate="">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label text-dark-emphasis" for="name">{{Translation::trans('الاسم الرباعي')}}<span
                                    class="d-inline-block text-red">*</span></label>
                            <input class="form-control" id="name" type="text" name="name" placeholder="{{Translation::trans('الاسم الرباعي')}}"
                                   required="" autofocus=""/>
                            @if($errors->has('name'))
                                <div class="error">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-dark-emphasis" for="id">{{Translation::trans('الهوية الوطنية')}}<span
                                    class="d-inline-block text-red">*</span></label>
                            <input class="form-control" id="id" type="text" name="identity" placeholder="{{Translation::trans('الهوية الوطنية')}}"
                                   required=""/>
                            @if($errors->has('identity'))
                                <div class="error">{{ $errors->first('identity') }}</div>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-dark-emphasis" for="phone">{{Translation::trans('رقم الجوال')}}<span
                                    class="d-inline-block text-red">*</span></label>
                            <div class="input-group mb-3">
                                <input class="form-control" id="phone" type="text" name="phone" placeholder="رقم الجوال"
                                       required=""/><span class="input-group-text" id="basic-addon1">{{__('general.country_code')}}</span>

                            </div>
                            @if($errors->has('phone'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('phone') }}</div>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-dark-emphasis" for="address">{{Translation::trans('الجنس')}}<span
                                    class="d-inline-block text-red">*</span></label>
                            <div class="d-flex gap-4">
                                <div class="form-check">
                                    <input class="form-check-input" id="male" type="radio" name="gender" value="male"
                                           required=""/>
                                    <label class="form-check-label text-dark-emphasis" for="male">{{Translation::trans('ذكر')}}</label>

                                    <div class="form-check">
                                        <input class="form-check-input" id="female" type="radio" name="gender"
                                               value="female" required=""/>
                                        <label class="form-check-label text-dark-emphasis" for="female">{{Translation::trans('انثى')}}</label>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="mb-4">
                            <label class="form-label text-dark-emphasis" for="email">{{Translation::trans('البريد الالكتروني')}}<span
                                    class="d-inline-block text-red">*</span></label>
                            <input class="form-control" id="email" type="email" name="email"
                                   placeholder="{{Translation::trans('البريد الالكتروني')}}" required=""/>

                            @if($errors->has('email'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-dark-emphasis" for="password">{{Translation::trans('كلمة المرور')}}<span
                                    class="d-inline-block text-red">*</span></label>
                            <div class="css-input-password">
                                <input class="form-control" id="password" type="password" name="password"
                                       placeholder="{{Translation::trans('كلمة المرور')}}" required=""/>

                                <button
                                    class="btn bg-transparent rounded-circle p-2 css-input-password--show js-toggle-password ms-2"
                                    id="toggle-password" type="button"><i class="bi bi-eye fs-3"></i></button>
                            </div>
                            @if($errors->has('password'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-dark-emphasis" for="confirmpassword">{{Translation::trans('تأكيد كلمة المرور')}}<span
                                    class="d-inline-block text-red">*</span></label>
                            <div class="css-input-password">
                                <input class="form-control" id="confirmpassword" type="password"
                                       name="password_confirmation" placeholder="{{Translation::trans('تأكيد كلمة المرور')}}" required=""/>
                                <button
                                    class="btn bg-transparent rounded-circle p-2 css-input-password--show js-toggle-password ms-2"
                                    id="toggle-password" type="button"><i class="bi bi-eye fs-3"></i></button>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-primary py-md px-6 w-100" type="submit">{{Translation::trans('تسجيل')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
