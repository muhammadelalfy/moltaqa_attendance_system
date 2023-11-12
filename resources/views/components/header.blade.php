<header class="css-header position-relative bg-opacity-25">
    <div class="css-header-overlay"></div>
    <div class="css-header-body position-relative z-2">
        <div class="css-top-navber bg-primary bg-opacity-50 py-1">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <div class="css-flex-item d-flex align-items-center me-2">
                        <div class="css-social-media d-flex align-items-center h-100">
                            <ul class="list-unstyled d-flex align-items-center gap-4 mb-0 pe-0 h-100">
                                <li><a class="text-decoration-none text-white" target="_blank" href="https://www.facebook.com/abaadcomsa"><i class="bi bi-facebook fs-5"></i></a></li>
                                <li><a class="text-decoration-none text-white" target="_blank" href="https://twitter.com/abaadcomsa"><i class="bi bi-twitter-x fs-5"></i></a></li>
                                <li><a class="text-decoration-none text-white" target="_blank" href="https://www.instagram.com/abaadcomsa"><i class="bi bi-instagram fs-5"></i></a></li>
                                <li><a class="text-decoration-none text-white" target="_blank" href="https://www.youtube.com/@abaadcomsa"><i class="bi bi-youtube fs-5"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="css-search d-none d-lg-block">
                        <form class="mb-0" action="" method="POST">
                            <div class="position-relative">
                                <input class="css-subscribe-input bg-transparent text-white form-control" id="search" type="text" name="search" placeholder="ابحث هنا" required=""/>
                                <button class="btn css-search-btn bg-transparent rounded-circle ms-2 position-absolute" type="submit"><i class="bi bi-search text-white"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="flex-item d-flex justify-content-between align-items-center">
                        <div class="css-lang-dropdown">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-transparent dropdown-toggle text-white" id="dropdownMenuButton1" type="button" data-bs-toggle="dropdown" aria-expanded="false">العربية</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">العربية</a></li>
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-xl py-2">
            <div class="container-fluid"><a class="navbar-brand text-white me-2" href="/"><img class="css-logo me-3" src="{{asset('images/main-logos-white.png')}}" alt="logo"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-list fs-3"></i></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav css-navbar--gap mx-auto mb-2 mb-lg-0 pe-0">
                        <li class="nav-item"><a class="js-nav-link page-link nav-link text-white css-navbar-active" href="{{route('pages','home')}}">الرئيسية</a></li>
                        <li class="nav-item"><a class="js-nav-link page-link nav-link text-white" href="{{route('pages','about')}}">نبذة عن الملتقى</a></li>
                        <li class="nav-item"><a class="js-nav-link page-link nav-link text-white" href="#sessions">الجلسات</a></li>
                        <li class="nav-item"><a class="js-nav-link page-link nav-link text-white" href="{{route('pages','awareness')}}">إرشادك </a></li>
                        <li class="nav-item"><a class="js-nav-link page-link nav-link text-white" href="{{route('pages','attendance')}}">حضور الملتقى</a></li>
                        <li class="nav-item"><a class="js-nav-link page-link nav-link text-white" href="{{route('pages','rate-us')}}">قيمنا</a></li>
                        <li class="nav-item"><a class="js-nav-link page-link nav-link text-white" href="{{route('pages','certificates')}}">استخراج الشهادة</a></li>
                        <li class="nav-item"><a class="js-nav-link page-link nav-link text-white" href="{{route('pages','contact')}}">اتصل بنا</a></li>
                    </ul>
                    <div class="d-flex gap-4 mt-4 mt-xl-0"><a class="btn btn-secondary text-white fw-normal fs-6 py-md px-4" href="{{route('pages','login-page')}}">تسجيل الدخول</a></div>
                </div>
            </div>
        </nav>
        <div class="css-header-content pb-12 pt-8">
            <div class="container">
                <div class="row align-items-center css-header-row">
                    <div class="col-md-12 col-xl-6 text-white h-100">
                        <div class="css-header-carousel carousel slide carousel-fade" id="carouselExampleSlidesOnly" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="w-100">
                                        <h1 class="h1 fw-bold lh-lg css-letter-spacing">أسرة سعودية آمنة النسخة الثالثة 2023</h1>
                                        <p class="fs-4 lead pb-3 mb-0">رؤيتنا: أسرة واعية بمخاطر المخدرات والجرائم الإلكترونية</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="6000">
                                    <div class="w-100">
                                        <h1 class="h1 fw-bold lh-lg css-letter-spacing">أسرة سعودية آمنة النسخة الثالثة 2023              </h1>
                                        <p class="fs-4 lead pb-3 mb-0">رسالتنا: تقديم منظومة متكاملة من الحلول والتوعية لحماية الأسرة من المخدرات والجرائم الإلكترونية</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="css-search css-search--lg mb-4">
                            <form class="mb-0" action="" method="POST">
                                <div class="position-relative">
                                    <input class="css-subscribe-input bg-transparent text-white form-control" id="search" type="text" name="search" placeholder="ابحث هنا" required=""/>
                                    <button class="btn css-search-btn bg-transparent rounded-circle ms-3 position-absolute" type="submit"><i class="bi bi-search text-white"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="d-grid gap-4 d-md-flex justify-content-lg-start css-will-transform">
                            <div><a class="btn btn-secondary text-white py-md fs-6 btn-lg px-6 w-100" href="{{route('pages','register')}}">إنضم لنا</a></div>
                            <div class="position-relative d-flex flex-column align-items-center justify-content-center"><a class="btn btn-green css-disabled-link d-flex align-items-center justify-content-center text-white py-md fs-6 btn-lg px-4 w-100" href="{{route('pages','attendance')}}">حضور اليث المباشر<i class="bi bi-circle-fill ms-2 me-2 text-danger"></i></a>
                                <div class="d-flex flex-column" id="jsCountdown"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-6 css-video-container overflow-hidden px-xl-0 px-md-2" id="jsVideoWrapper"><img class="img-fluid w-100 h-100" src="{{asset('images/hero.jpeg')}}" alt="Hero"/>
                        <div class="css-video-player-button position-absolute top-50 start-50">
                            <button class="css-video-player-button-play btn p-1 rounded-circle" id="jsPlayVideo" type="button" data-bs-toggle="modal" data-bs-target="#playVideo">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewbox="0 0 80 80" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40 79.6227C61.8853 79.6227 79.6226 61.8853 79.6226 40C79.6226 18.1147 61.8853 0.377365 40 0.377365C18.1146 0.377365 0.377319 18.1147 0.377319 40C0.377319 61.8853 18.1146 79.6227 40 79.6227ZM50.8883 43.4558C52.9647 42.3169 52.9647 39.334 50.8883 38.1951L35.3625 29.6795C33.3632 28.5829 30.9198 30.0296 30.9198 32.3098L30.9198 49.3411C30.9198 51.6214 33.3632 53.068 35.3625 51.9714L50.8883 43.4558Z" fill="url(#paint0_linear_65_16208)"></path>
                                    <defs>
                                        <lineargradient id="paint0_linear_65_16208" x1="8.2193" y1="8.63208" x2="40" y2="34.2217" gradientunits="userSpaceOnUse">
                                            <stop stop-color="#52FCFC"></stop>
                                            <stop offset="1" stop-color="white"></stop>
                                        </lineargradient>
                                    </defs>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
