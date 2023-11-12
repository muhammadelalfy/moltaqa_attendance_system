@extends('layouts.app')
@section('content')

<div class="position-relative z-3 start-0 w-100 css-box-over-header">

    <div class="container">
        <div class="bg-white rounded-3 p-5 border">
            <h2 class="h2 text-dark fw-bold mb-4">سجل معنا في الملتقي</h2>
            <div class="pb-4">
                <figcaption class="text-dark italic">جميع الحقول مطلوبة<span class="d-inline-block text-red">*</span></figcaption>
            </div>
            <div class="row"></div>
            <div class="col-lg-12">
                <form class="mt-4 js-validate" action="" method="POST" novalidate="">
                    <div class="mb-4">
                        <label class="form-label text-dark-emphasis" for="name">الاسم الرباعي<span class="d-inline-block text-red">*</span></label>
                        <input class="form-control" id="name" type="text" name="name" placeholder="الاسم الرباعي" required="" autofocus=""/>
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-dark-emphasis" for="id">الهوية الوطنية<span class="d-inline-block text-red">*</span></label>
                        <input class="form-control" id="id" type="text" name="name" placeholder="الهوية الوطنية" required=""/>
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-dark-emphasis" for="phone">رقم الجوال<span class="d-inline-block text-red">*</span></label>
                        <div class="input-group mb-3">
                            <input class="form-control" id="phone" type="text" name="phone" placeholder="رقم الجوال" required=""/><span class="input-group-text" id="basic-addon1">+٩٦٦</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-dark-emphasis" for="address">الجنس<span class="d-inline-block text-red">*</span></label>
                        <div class="d-flex gap-4">
                            <div class="form-check">
                                <input class="form-check-input" id="male" type="radio" name="gender" value="male" required=""/>
                                <label class="form-check-label text-dark-emphasis" for="male">ذكر</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="female" type="radio" name="gender" value="female" required=""/>
                                <label class="form-check-label text-dark-emphasis" for="female">انثى</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-dark-emphasis" for="email">البريد الالكتروني<span class="d-inline-block text-red">*</span></label>
                        <input class="form-control" id="email" type="email" name="email" placeholder="البريد الالكتروني" required=""/>
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-dark-emphasis" for="password">كلمة المرور<span class="d-inline-block text-red">*</span></label>
                        <div class="css-input-password">
                            <input class="form-control" id="password" type="password" name="password" placeholder="كلمة المرور" required=""/>
                            <button class="btn bg-transparent rounded-circle p-2 css-input-password--show js-toggle-password ms-2" id="toggle-password" type="button"><i class="bi bi-eye fs-3"></i></button>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-dark-emphasis" for="confirmpassword">تأكيد كلمة المرور<span class="d-inline-block text-red">*</span></label>
                        <div class="css-input-password">
                            <input class="form-control" id="confirmpassword" type="password" name="password" placeholder="تأكيد كلمة المرور" required=""/>
                            <button class="btn bg-transparent rounded-circle p-2 css-input-password--show js-toggle-password ms-2" id="toggle-password" type="button"><i class="bi bi-eye fs-3"></i></button>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-primary py-md px-6 w-100" type="submit">تسجيل</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
