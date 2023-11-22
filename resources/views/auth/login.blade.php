@extends('layouts.auth')

@section('title', 'تسجيل الدخول')

@section('content')
    <div class="css-auth position-relative">
        <div class="row w-100 mx-0">
            <div class="col-sm-12 col-lg-6 col-xl-3 position-relative z-2 vh-100 px-0">
                <div class="bg-white d-flex flex-column justify-content-between h-100 px-5 py-4 rounded-start-4">
                    <div class="css-login-header"></div>
                    <div class="css-auth-body">
                        <div class="d-flex justify-content-center gap-2 mb-4"><a class="text-decoration-none text-dark-emphasis fs-6" href="{{route('pages','home')}}"><img class="css-logo w-100" src="{{asset('images/main-logo-colored.png')}}" alt="logo"/></a></div>
                        <h2 class="h2 text-dark fw-bold text-center">تسجيل الدخول</h2>
                        <form class="js-validate py-6" action="{{route('login')}}" method="post" novalidate="">
                            <div class="mb-4">
                                @csrf
                                <label class="form-label text-dark-emphasis" for="name">الهوية الوطنية<span class="d-inline-block text-red">*</span></label>
                                <input class="form-control form-control-lg rounded-start-pill" id="name" type="text" name="identity" placeholder="الهوية الوطنية" required=""/>
                                @error('identity')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-1">
                                <label class="form-label text-dark-emphasis" for="password">كلمة المرور<span class="d-inline-block text-red">*</span></label>
                                <div class="css-input-password">
                                    <input class="form-control form-control-lg rounded-start-pill" id="password" type="password" name="password" placeholder="كلمة المرور" required=""/>
                                    <button class="btn bg-transparent rounded-circle p-2 css-input-password--show js-toggle-password ms-2" id="toggle-password" type="button"><i class="bi bi-eye fs-3"></i></button>
                                </div>
                                @error('password')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4 text-start"><a class="text-decoration-none text-dark-emphasis fs-6" href="{{route('pages','reset-password')}}">نسيت كلمة المرور؟</a></div>
                            <div class="d-flex pt-4">
                                <button class="btn btn-secondary rounded-pill text-white py-md px-6 w-100" type="submit">تسجيل الدخول</button>
                            </div>
                            <div class="d-flex justify-content-center mt-2">
                                <div class="fs-6 css-flex=item"><span class="text-dark-emphasis">لاتملك حساب؟ </span><a class="text-decoration-none text-dark fw-bold fs-6 d-inline-block" href="{{route('register','register')}}">أنشئ حسابك الآن</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="css-login-footer mt-3 mt-md-0">
                        <div class="text-center mb-3"><img src="{{asset('images/abaad.png')}}" alt="logo" width="75"/></div>
                        <p class="text-dark-emphasis fs-6 mb-0 text-center">جميع الحقوق محفوظة<br/>لملتقى أسرة سعودية آمنة 2023</p>
                    </div>
                </div>
            </div>
            <div class="position-absolute top-0 start-0 z-1 d-none d-lg-block px-0"><img class="img-fluid css-image-login vw-100 vh-100" src="{{asset('images/hero.jpeg')}}" alt="login"/></div>
        </div>
    </div>
@endsection
