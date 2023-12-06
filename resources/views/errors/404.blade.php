@extends('layouts.auth')
@section('title')
    not found
@endsection
@section('content')
    <!-- not found page content -->
    <div class="container">
        <div class="py-10 text-center vh-100">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="flex-item">
                    <h1 class="h1 text-dark fw-bold mb-4">404</h1><span class="css-tag bg-primary bg-opacity-10 text-primary border border-primary fs-5">الصفحة غير موجودة</span>
                    <p class="fs-6 text-dark-emphasis lh-xl css-letter-spacing mb-0 mt-3">الصفحة التي تبحث عنها غير موجودة، ربما تم حذفها أو تم نقلها أو أنك أدخلت عنوانًا خاطئًا.</p>
                    <p class="fs-6 text-dark-emphasis lh-xl css-letter-spacing mb-0 mt-1">يمكنك العودة إلى الصفحة الرئيسية<a class="d-inline-block text-primary fw-bold me-2" href="/">من هنا</a>.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
