@extends('pages.admin.layoutes.app')
@section('title', ' اسالة المدير')
@section('content')
    <section class="css-main">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid"><a class="navbar-brand" href="{{route('pages','admin-overview')}}">لوحة التحكم الخاصة بك</a>
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
                <h5 class="h5 text-dark" id="greeting"></h5>
                <h2 class="h3 text-primary mb-5" id="welcome-message"></h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="border rounded p-4"><span class="bg-primary p-2 rounded text-white"><i class="bi bi-heart icon"></i></span>
                            <div class="d-flex flex-column justify-content-between mt-4">
                                <h4 class="h5 text-dark fw-bold mb-2">معدل التفاعل</h4>
                                <p class="fs-5 text-dark-emphasis fw-normal mb-0">[البيانات هنا]</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border rounded p-4"><span class="bg-primary p-2 rounded text-white"><i class="bi bi-heart icon"></i></span>
                            <div class="d-flex flex-column justify-content-between mt-4">
                                <h4 class="h5 text-dark fw-bold mb-2">عدد الافراد المسجلين</h4>
                                <p class="fs-5 text-dark-emphasis fw-normal mb-0">[البيانات هنا]</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border rounded p-4"><span class="bg-primary p-2 rounded text-white"><i class="bi bi-heart icon"></i></span>
                            <div class="d-flex flex-column justify-content-between mt-4">
                                <h4 class="h5 text-dark fw-bold mb-2">التسجيلات الجديدة</h4>
                                <p class="fs-5 text-dark-emphasis fw-normal mb-0">[البيانات هنا]</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border rounded p-4"><span class="bg-primary p-2 rounded text-white"><i class="bi bi-heart icon"></i></span>
                            <div class="d-flex flex-column justify-content-between mt-4">
                                <h4 class="h5 text-dark fw-bold mb-2">اجمالي عدد الشهادات </h4>
                                <p class="fs-5 text-dark-emphasis fw-normal mb-0">[البيانات هنا]</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('create-meeting','1')}}" class="btn btn-primary btn-lg px-4" id="jsStartMeeting">ابدأ البث المباشر</a>
                </div>
            </div>
        </div>
    </section>
@endsection
