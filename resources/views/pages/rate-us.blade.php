@extends('layouts.app')

@section('title', 'قيمنا')

@section('content')
    <div class="pt-8 pb-16">
        <div class="container">
            <h2 class="h2 text-dark fw-bold mb-4">
                استبيان نهاية البرنامج
            </h2>
            <section class="border rounded-3 p-5">
                <div class="pb-4">
                    <h6 class="h4 text-dark fw-bold mb-2">
                        تقيم برنامج التاهيل لمزودي المنصات التعليمية
                    </h6>
                    <p class="text-dark">
                        نشكركم علي اختياركم للمشاركة في برنامج التاهيل لمزودي المنصات التعليمية ونتمني ان يكون البرنامج
                        قد توافق مع توقعاتكم ونرجو منكم تقيم البرنامج بناء علي المعاير التالية
                    </p>
                    <figcaption class="text-dark italic">
                        جميع الحقول مطلوبة
                        <span class="d-inline-block text-red">*</span>
                    </figcaption>
                </div>
                <form action="" class="js-multi-step-form js-validate" novalidate>
                    @csrf
                    <div class="js-step css-step row g-3" id="step-1">
                        <div class="col-xl-12 css-form-section py-4">
                            <h4 class="h4 text-dark fw-semibold mb-3">
                                كيف تعرفت علي المركز الوطني للتعليم الالكتروني ؟
                            </h4>
                            {{--  --}}
                            <div class="row gap-2">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="js-validate-input form-check-input" type="radio" name="rate-us" id="radioRateUs1"
                                            value="option1">
                                        <label class="form-check-label text-dark" for="radioRateUs1">
                                            برنامج للتواصل الاجتماعي
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="js-validate-input form-check-input" type="radio" name="rate-us" id="radioRateUs2"
                                            value="option2">
                                        <label class="form-check-label text-dark" for="radioRateUs2">
                                            اضافة من جهه اخري
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="js-validate-input form-check-input" type="radio" name="rate-us" id="radioRateUs3"
                                            value="option3">
                                        <label class="form-check-label text-dark" for="radioRateUs3">
                                            محرك البحث
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="js-validate-input form-check-input" type="radio" name="rate-us" id="radioRateUs4"
                                            value="option4">
                                        <label class="form-check-label text-dark" for="radioRateUs4">
                                            اخري
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-xl-12 css-form-section py-4">
                            <h4 class="h4 text-dark fw-semibold mb-3">
                                ما مدي رضاك عن البرنامج بناء علي المعاير ادناه ؟
                            </h4>
                            {{--  --}}
                            <div class="row gap-4">
                                <div class="col-12">
                                    <label for="" class="text-dark mb-2">اجراءات البرنامج</label>
                                    <select class="js-validate-input form-select form-select-lg mb-3" aria-label="Large select example" required>
                                        <option selected>
                                            - اختر -
                                        </option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                {{--  --}}
                                <div class="col-12">
                                    <label for="" class="text-dark mb-2">سرعة الحصول علي الخدمة</label>
                                    <select class="js-validate-input form-select form-select-lg mb-3" aria-label="Large select example">
                                        <option selected>
                                            - اختر -
                                        </option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                {{--  --}}
                                <div class="col-12">
                                    <label for="" class="text-dark mb-2">تلبية مخرحات الرنامج لتوقعاتك</label>
                                    <select class="js-validate-input form-select form-select-lg mb-3" aria-label="Large select example">
                                        <option selected>
                                            - اختر -
                                        </option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                {{--  --}}
                                <div class="col-12">
                                    <label for="" class="text-dark mb-2">الموقع الالكتروني الذي استخدمته لتنفيذ هذة
                                        الخدمة</label>
                                    <select class="js-validate-input form-select form-select-lg mb-3" aria-label="Large select example">
                                        <option selected>
                                            - اختر -
                                        </option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                {{--  --}}
                                <div class="col-12">
                                    <label for="" class="text-dark mb-2">اثناء اجراءات طلب الخدمة هل قمت بطلب الدعم
                                        عبر
                                        القنوات المختلفه؟</label>
                                    <select class="js-validate-input form-select form-select-lg mb-3" aria-label="Large select example">
                                        <option selected>
                                            - اختر -
                                        </option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                {{--  --}}
                            </div>
                        </div>
                        <div class="col-xl-12 css-form-section py-4">
                            <div class="d-flex justify-content-center">
                                <button type="button" class="js-next btn btn-primary py-md px-6 w-100">
                                    التالي
                                </button>
                            </div>
                        </div>
                    </div>

                    {{--  --}}
                    <div class="js-step css-step row g-3" id="step-2">
                        <div class="col-xl-12 css-form-section py-4">
                            <h4 class="h4 text-dark fw-semibold mb-3">
                                بشكل عام ما مدي سهوله الحصول علي الخدمه ؟
                            </h4>
                            {{--  --}}
                            <div class="col-lg-3">
                                <div class="d-flex gap-3 w-100">
                                    <div class="col">
                                        <input type="radio" class="js-validate-input btn-check" name="services" id="services1"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="services1">1</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="js-validate-input btn-check" name="services" id="services2"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="services2">2</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="js-validate-input btn-check" name="services" id="services3"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="services3">3</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="js-validate-input btn-check" name="services" id="services4"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="services4">4</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="js-validate-input btn-check" name="services" id="services5"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="services5">5</label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="text-primary">
                                        صعب جدا
                                    </span>
                                    <span class="text-primary">
                                        سهل جدا
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-xl-12 css-form-section py-4">
                            <h4 class="h4 text-dark fw-semibold mb-3">
                                بناء علي تجربتك ما مدي توصيتك بالبرنامج للاخرين ؟
                            </h4>
                            {{--  --}}
                            <div class="col-lg-6">
                                <div class="d-flex gap-3 w-100">
                                    <div class="col">
                                        <input type="radio" class="js-validate-input js-validate-input btn-check" name="experience" id="experience0"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="experience0">0</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="js-validate-input js-validate-input btn-check" name="experience" id="experience1"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="experience1">1</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="js-validate-input js-validate-input btn-check" name="experience" id="experience2"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="experience2">2</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="js-validate-input js-validate-input btn-check" name="experience" id="experience3"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="experience3">3</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="js-validate-input js-validate-input btn-check" name="experience" id="experience4"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="experience4">4</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="js-validate-input js-validate-input btn-check" name="experience" id="experience5"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="experience5">5</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="js-validate-input js-validate-input btn-check" name="experience" id="experience6"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="experience6">6</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="js-validate-input js-validate-input btn-check" name="experience" id="experience7"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="experience7">7</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="js-validate-input js-validate-input btn-check" name="experience" id="experience8"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="experience8">8</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="js-validate-input js-validate-input btn-check" name="experience" id="experience9"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="experience9">9</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="js-validate-input js-validate-input btn-check" name="experience" id="experience10"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary w-100" for="experience10">10</label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="text-primary">
                                        صعب جدالا اوصي علي الاطلاق
                                    </span>
                                    <span class="text-primary">
                                        اوصي بشدة
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- Submit --}}
                        <div class="col-xl-12 css-form-section py-4">
                            <div class="d-flex justify-content-between gap-4">
                                <button type="submit" class="js-submit btn btn-primary py-md px-6 w-100">
                                    ارسال
                                </button>
                                <button type="button" class="js-prev btn btn-outline-primary py-md px-6 w-100">
                                    السابق
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection
