@extends('layouts.app')

@section('title', 'سجل معنا')

@section('content')
    <div class="pt-8 pb-16">
        <div class="container">
            <h2 class="h2 text-dark fw-bold mb-4">
                سجل معنا
            </h2>
            <section class="border rounded-3 p-5">
                <div class="pb-4">
                    <h6 class="h4 text-dark fw-bold mb-2">
                      سجل معنا في الملتقي
                    </h6>
                    <figcaption class="text-dark italic">
                        جميع الحقول مطلوبة
                        <span class="d-inline-block text-red">*</span>
                    </figcaption>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="" method="POST" class="mt-4 js-validate" novalidate>
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="form-label text-dark-emphasis">الاسم الرباعي<span class="d-inline-block text-red">*</span></label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="الاسم الرباعي" required autofocus>
                            </div>
                            {{-- الهوية الوطنية --}}
                            <div class="mb-4">
                                <label for="name" class="form-label text-dark-emphasis">الهوية الوطنية<span class="d-inline-block text-red">*</span></label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="الهوية الوطنية" required>
                            </div>
                            {{--  --}}
                            <div class="mb-4">
                                <label for="phone" class="form-label text-dark-emphasis">رقم الهاتف<span class="d-inline-block text-red">*</span></label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="رقم الهاتف" required>
                            </div>
                            <div class="mb-4">
                                <label for="address" class="form-label text-dark-emphasis">الجنس<span class="d-inline-block text-red">*</span></label>
                                <div class="d-flex gap-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="male"
                                            value="male" required>
                                        <label class="form-check-label text-dark-emphasis" for="male">
                                            ذكر
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="female"
                                            value="female" required>
                                        <label class="form-check-label text-dark-emphasis" for="female">
                                            انثى
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="mb-4">
                                <label for="email" class="form-label text-dark-emphasis">البريد الالكتروني<span class="d-inline-block text-red">*</span></label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="البريد الالكتروني" required>
                            </div>
                            {{-- submit --}}
                            <div class="d-flex">
                                <button type="submit" class="btn btn-primary py-md px-6 w-100">
                                    سجل معنا
                                </button>
                            </div>
                        </form>
                    </div>
                    {{--  --}}
                </div>
            </section>
        </div>
    </div>
@endsection
