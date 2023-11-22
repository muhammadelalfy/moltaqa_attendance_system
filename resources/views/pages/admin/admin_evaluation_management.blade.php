@extends('pages.admin.layoutes.app')
@section('title', ' اسالة المدير')
@section('content')
    <section class="css-main">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid"><a class="navbar-brand" href="{{route('admin_overview')}}">لوحة التحكم الخاصة بك</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="تبديل التصفح"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto"></ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link text-dark-emphasis" href="#"><i class="bi bi-bell fs-4"></i></a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-dark-emphasis" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill fs-4"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">الاعدادات</a></li>
                                <li>
                                    <hr class="dropdown-divider"/>
                                </li>
                                <li><a class="dropdown-item" href="#">تسجيل الخروج</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-dark"></div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-dark-emphasis" id="langDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-translate fs-4"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="langDropdown">
                                <li><a class="dropdown-item" href="#">العربية</a></li>
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <!-- إضافة المزيد من الخيارات اللغوية-->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="css-main-content py-5">
            <div class="container">
                <ul class="nav nav-pills pe-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">البيانات (مجمع)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">البيانات (فردي)</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane pt-4 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <section>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="border rounded p-4"><span class="bg-primary p-2 rounded text-white"><i class="bi bi-award"></i></span>
                                        <div class="d-flex flex-column justify-content-between mt-4">
                                            <h4 class="h5 text-dark fw-bold mb-2">إجمالي عدد التقييمات</h4>
                                            <p class="fs-5 text-dark-emphasis fw-normal mb-0">40 تقييم</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="border rounded p-4"><span class="bg-primary p-2 rounded text-white"><i class="bi bi-star icon"></i></span>
                                        <div class="d-flex flex-column justify-content-between mt-4">
                                            <h4 class="h5 text-dark fw-bold flex-shrink-1 mb-2">متوسط عدد التقييمات في الجلسة</h4>
                                            <p class="fs-5 text-dark-emphasis fw-normal mb-0 flex-1">
                                                34
                                                تقييم
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="border rounded p-4"><span class="bg-primary p-2 rounded text-white"><i class="bi bi-alarm"></i></span>
                                        <div class="d-flex flex-column justify-content-between mt-4">
                                            <h4 class="h5 text-dark fw-bold mb-2">متوسط مدة الجلسات</h4>
                                            <p class="fs-5 text-dark-emphasis fw-normal mb-0">45 دقيقة</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="pt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="border rounded p-4 h-100">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="h4 text-dark fw-bold">ادارة التقييمات</h4>
                                            <button class="btn btn-primary" type="button"> طباعة البيانات  <i class="bi bi-printer"></i></button>
                                        </div>
                                        <canvas id="ratingsChart"></canvas>
                                        <div class="mt-3" id="ratingsLegend"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="border rounded p-4 h-100">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="h4 text-dark fw-bold">تصنيف التقييمات</h4>
                                            <button class="btn btn-primary" type="button"> طباعة البيانات  <i class="bi bi-printer"></i></button>
                                        </div>
                                        <canvas id="reviewsChart"></canvas>
                                        <div class="mt-3" id="legend"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane pt-4 fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="table-responsive border rounded px-4 py-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="css-flex-item d-flex align-items-center">
                                    <h2 class="h2 text-dark fw-bold lh-lg css-letter-spacing ms-3">الأفراد</h2>
                                    <button class="btn btn-primary" type="button"> طباعة البيانات  <i class="bi bi-printer"></i></button>
                                </div>
                                <div class="css-pagination-table css-flex-item d-flex align-items-center">
                                    <div class="css-number-form-wrap d-flex justify-content-center align-items-center ms-2">
                                        <div class="d-flex">
                                            <button class="css-pagination-table-btn btn p-0 btn-link text-dark" id="prevPage" type="button"><i class="bi bi-arrow-right-short"></i></button>
                                            <input class="form-control css-number-form-control" id="pageInput" type="number" min="1" value="1"/>
                                            <button class="css-pagination-table-btn btn p-0 btn-link text-dark" id="nextPage" type="button"><i class="bi bi-arrow-left-short"></i></button>
                                        </div>
                                    </div>
                                    <h6 class="h6 text-dark mb-0">الاشخاص</h6>
                                </div>
                            </div>
                            <table class="css-table table table-hover bg-transparent js-table">
                                <thead>
                                <tr>
                                    <th>الاسم</th>
                                    <th>رقم الهوية	</th>
                                    <th>البريد الإلكتروني</th>
                                    <th>الجنس</th>
                                    <th>نوع الحضور	</th>
                                    <th>الحالة</th>
                                    <th>الحصول على الشهادة</th>
                                </tr>
                                </thead>
                                <tbody id="tableBody">
                                <!-- Table body will be generated dynamically with JavaScript-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
