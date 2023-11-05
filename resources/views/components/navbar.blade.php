@php
$routes = [
    'الرئيسية' => 'home',
    'نبذة عن البرنامج' => 'about',
    'الفعاليات' => 'activities',
    'حضور البرنامج' => 'attendance',
    'قيمنا' => 'rate-us',
    'استخراج الشهادة' => 'certificates',
    'اتصل بنا' => 'contact',
];
@endphp

<nav class="navbar navbar-expand-lg py-3">
  <div class="container-fluid">
      <a class="navbar-brand text-white" href="/">
          <img src="{{ asset('images/main-logo.png') }}" alt="logo" class="css-logo">
          <img src="{{ asset('images/logo.png') }}" alt="logo" class="css-logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav css-navbar--gap mx-auto mb-2 mb-lg-0">
            @foreach($routes as $title => $route)
              <li class="nav-item">
                  <a
                    class="js-nav-link page-link nav-link text-white {{ request()->routeIs($route) ? 'css-navbar-active' : '' }}"
                    href="{{ route($route) }}">
                    {{ $title }}
                  </a>
              </li>
              @endforeach
          </ul>
          <div class="d-flex gap-4">
              <a href="{{ route('signup-with-us') }}" class="btn btn-primary text-white fw-normal fs-6 py-md px-4">
                  سجل معنا
              </a>
              {{-- login --}}
              <a href="{{ route('login') }}" class="btn btn-outline-primary text-white fw-normal fs-6 py-md px-4">
                  تسجيل الدخول
              </a>
          </div>
      </div>
  </div>
</nav>
