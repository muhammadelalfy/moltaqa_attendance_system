@extends('layouts.auth')

@section('title', 'تسجيل الدخول')

@section('content')
    <div class="css-login position-relative ">
        <div class="d-flex">
            <div class="col-xl-3 position-relative z-2 vh-100">
                <div class="bg-white d-flex flex-column justify-content-between h-100 px-5 py-4 rounded-start-4">
                    <div class="css-login-header">
                        <img src="{{ asset('images/abaad.png') }}" alt="logo" width="100">
                    </div>
                    <div class="css-login-body">
                        {{-- logos --}}
                        <div class="d-flex justify-content-center gap-2 mb-4">
                          <img src="{{ asset('images/main-logo-dark.png') }}" alt="logo" class="css-logo">
                          <img src="{{ asset('images/logo-1-dark.png') }}" alt="logo" class="css-logo">
                          <img src="{{ asset('images/logo-2-dark.png') }}" alt="logo" class="css-logo">
                        </div>
                        <h2 class="h2 text-dark fw-bold text-center">
                            تسجيل الدخول
                        </h2>
                        <form action="" method="POST" class="js-validate py-6" novalidate>
                          @csrf
                            {{-- الهوية الوطنية --}}
                            <div class="mb-4">
                                <label for="name" class="form-label text-dark-emphasis">الهوية الوطنية<span
                                        class="d-inline-block text-red">*</span></label>
                                <input type="text" name="name" id="name" class="form-control form-control-lg"
                                    placeholder="الهوية الوطنية" required>
                            </div>
                            {{-- password --}}
                            <div class="mb-1">
                                <label for="password" class="form-label text-dark-emphasis">كلمة المرور<span
                                        class="d-inline-block text-red">*</span></label>
                                <div class="css-input-password">
                                  <input type="password" name="password" id="password" class="form-control form-control-lg"
                                      placeholder="كلمة المرور" required>
                                      <button type="button" id="toggle-password" class="btn bg-transparent rounded-circle p-2 css-input-password--show js-toggle-password ms-2">
                                        <i class="bi bi-eye fs-3"></i>
                                      </button>
                                </div>
                            </div>
                            {{-- forget password {{ route('forget-password') }} --}}
                            <div class="mb-4 text-start">
                                <a href="" class="text-decoration-none text-dark-emphasis fs-6">
                                    نسيت كلمة المرور؟
                                </a>
                            </div>
                            {{-- submit --}}
                            <div class="d-flex pt-4">
                                <button type="submit" class="btn btn-secondary text-white py-md px-6 w-100">
                                    دخول
                                </button>
                            </div>
                            {{-- you dont have accoutn --}}
                            <div class="d-flex justify-content-between mt-2">
                            <div class="css-flex=item fs-6">
                                <span class="text-dark-emphasis">
                                  لاتملك حساب؟
                                </span>
                                <a href="{{ route('register') }}" class="text-decoration-none text-dark fw-bold">
                                    سجل معنا
                                </a>
                            </div>
                            {{-- or --}}
                            <div class="css-flex=item fs-6">
                                <span class="text-dark-emphasis">
                                  الدخول عبر
                                </span>
                                <a href="{{ route('register') }}" class="text-decoration-none text-dark fw-bold">
                                  نفاذ
                                </a>
                            </div>

                            </div>
                        </form>
                    </div>
                    <div class="css-login-footer">
                        <p class="text-dark-emphasis fs-6 mb-0 text-center">
                            جميع الحقوق محفوظة -- شركة ابعاد التطويرية لخدمات الاعمال ©2023
                        </p>
                    </div>
                </div>
            </div>
            <div class="position-absolute top-0 start-0 z-1">
                <img src="{{ asset('images/hero.jpeg') }}" alt="login" class="img-fluid css-image-login vw-100 vh-100">
            </div>
        </div>
    </div>
@endsection
