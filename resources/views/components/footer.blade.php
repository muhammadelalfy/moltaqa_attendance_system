<footer class="css-bg-gradient position-relative pb-6 {{ Route::currentRouteName() == 'rate-us' ? 'pt-10' : 'pt-14' }}">
    <!-- Footer content goes here -->
    <div class="css-poll-section position-absolute w-100">
        <div class="container">
          {{--
            if route not rate-us
          --}}
          @if (Route::currentRouteName() !== 'rate-us')
            <div class="bg-white shadow-lg rounded-3 px-5 py-4">
                <div class="d-flex align-items-center mb-4">
                    {{-- icon --}}
                    <div class="css-footer--section ms-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"
                            fill="none">
                            <circle cx="32" cy="32" r="32" transform="matrix(-1 0 0 1 64 0)"
                                fill="#D8D8D8" />
                            <path
                                d="M33.0172 38.8871C32.7776 38.1911 32.6579 37.5155 32.6579 36.8604C32.6579 36.1098 32.841 35.482 33.2074 34.977C33.5878 34.4448 34.3065 33.9194 35.3633 33.4007L36.7371 32.7661C38.5689 31.9063 39.9075 30.8759 40.753 29.6749C41.5843 28.5012 42 27.1024 42 25.4783C42 22.7488 41.0137 20.4833 39.041 18.6818C37.0683 16.8939 34.6024 16 31.6433 16C29.1775 16 27.2963 16.5596 26 17.6787V23.3902C27.4936 22.0937 29.6213 21.4454 32.3831 21.4454C33.919 21.4454 35.1378 21.6979 36.0396 22.2029C36.9696 22.7078 37.4346 23.4038 37.4346 24.2909C37.4346 24.9324 37.1669 25.5124 36.6314 26.031C36.2087 26.4677 35.4549 26.9454 34.3699 27.464L33.0594 28.0782C30.1286 29.361 28.6631 31.1489 28.6631 33.4417C28.6631 35.4479 29.4381 37.263 30.9881 38.8871H33.0172ZM35.2787 48.0174C35.9551 47.3759 36.2933 46.5502 36.2933 45.5403C36.2933 44.5031 35.9551 43.6706 35.2787 43.0428C34.5742 42.3877 33.6653 42.0602 32.5522 42.0602C31.4249 42.0602 30.5161 42.3877 29.8256 43.0428C29.1493 43.6706 28.8111 44.5031 28.8111 45.5403C28.8111 46.5502 29.1493 47.3759 29.8256 48.0174C30.5161 48.6725 31.4249 49 32.5522 49C33.6653 49 34.5742 48.6725 35.2787 48.0174Z"
                                fill="white" />
                        </svg>
                    </div>
                    <h2 class="h2 text-dark fw-bold css-letter-spacing mb-0">
                      ما مدي رضاك عن الملتقى؟
                    </h2>
                    {{-- form for ridao buttont to chack the user sutsfction --}}
                </div>
                <form action="" method="POST" class="row g-6 align-items-center">
                    @csrf
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poll" id="radioPoll1"
                                value="option1">
                            <label class="form-check-label text-dark" for="radioPoll1">
                                راضي
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poll" id="radioPoll2"
                                value="option2">
                            <label class="form-check-label text-dark" for="radioPoll2">
                                راضي تماما
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poll" id="radioPoll3"
                                value="option3" checked>
                            <label class="form-check-label text-dark" for="radioPoll3">
                                محايد
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poll" id="radioPoll4"
                                value="option4">
                            <label class="form-check-label text-dark" for="radioPoll4">
                                غير راضي
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poll" id="radioPoll5"
                                value="option5">
                            <label class="form-check-label text-dark" for="radioPoll5">
                                غير راضي تماما
                            </label>
                        </div>
                    </div>
                    {{-- submit --}}
                    <div class="col">
                        <button type="submit" class="btn btn-primary py-md fs-6 btn-lg px-5 w-100">
                            ارسال
                        </button>
                    </div>
                </form>
            </div>
          @endif
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <h4 class="h4 text-white mb-4">
                    نظرة عامة
                </h4>
                <ul class="list-unstyled pe-0">
                    <li class="mb-3">
                        <a href="#" class="text-white-50">
                            عن المنصة
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{ route('privacy-policy') }}" class="text-white-50">
                            سياسة الخصوصية والشروط
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{ route('signup-with-us') }}" class="text-white-50">
                            الشركاء
                        </a>
                    </li>
                </ul>
            </div>
            {{-- لدعم والمساعدة --}}
            <div class="col-xl-3">
                <h4 class="h4 text-white mb-4">
                    الدعم والمساعدة
                </h4>
                <ul class="list-unstyled pe-0">
                    <li class="mb-3">
                        <a href="{{ route('faqs') }}" class="text-white-50">
                            الاسئلة الشائعة
                        </a>
                    </li>
                </ul>
            </div>
            {{-- روابط مهمة --}}
            <div class="col-xl-3">
                <h4 class="h4 text-white mb-4">
                    روابط مهمة
                </h4>
                <ul class="list-unstyled pe-0">
                    <li class="mb-3">
                        <a href="#" class="fs-6 text-white-50">
                            نبذة عن البرنامج
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="fs-6 text-white-50">
                            الفعاليات
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="fs-6 text-white-50">
                            سجل معنا
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="fs-6 text-white-50">
                            حضور البرنامج
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="fs-6 text-white-50">
                            قيمنا
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="fs-6 text-white-50">
                            استخراج الشهادة
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="fs-6 text-white-50">
                            الجهة المنفذة
                        </a>
                    </li>

                </ul>
            </div>
            {{-- تواصل معنا --}}
            <div class="col-xl-3">
                <div class="css-footer--section">
                    <h4 class="h4 text-white mb-4">
                        تواصل معنا
                    </h4>
                    <p class="fs-6 text-white-50 mb-0">
                        يمكنك التواصل معنا من خلال الرقم التالي
                    </p>
                </div>
                {{-- phone number --}}
                <div class="css-footer--section my-4">
                    <div class="d-flex align-items-center">
                        <span class="text-white-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                viewBox="0 0 16 17" fill="none">
                                <path
                                    d="M1.39893 11.2855C0.794863 12.0253 0.876449 13.1253 1.64616 13.6902C1.93006 13.8986 2.2398 14.1044 2.80102 14.5535C4.30107 15.7541 6.47312 15.7541 7.96784 14.5469C9.07129 13.6558 10.1847 12.7214 11.228 11.6768C12.2714 10.6323 13.2047 9.51764 14.0948 8.41295C15.3006 6.9165 15.3006 4.74197 14.1014 3.24021C13.6317 2.65197 13.432 2.34326 13.215 2.04934C12.6672 1.30721 11.6115 1.20573 10.891 1.7812C9.85804 2.60597 8.90319 3.60145 7.96679 4.44395C8.83623 5.3826 8.50527 5.13463 9.33341 6.019C8.31381 7.7368 7.26121 8.77793 5.57664 9.78007C4.69186 8.94964 4.9381 9.27972 3.99898 8.40777C3.15998 9.33931 2.21848 10.282 1.39893 11.2855Z"
                                    stroke="white" stroke-width="1.5" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <h5 class="h5 text-white mb-0 me-2">رقم الهاتف</h5>
                    </div>
                    <a href="tel:99604" class="fs-1 text-white">
                        99604
                    </a>
                </div>
                {{-- Support --}}
                <div class="css-footer--section ">
                    {{-- Dates --}}
                    <h5 class="h5 text-white">رقم الهاتف</h5>
                </div>
                <p class="fs-6 text-white-50">
                    الاحد - الخميس 7ص - 8 م
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 pt-6 pb-3">
                <h4 class="h4 text-white">
                    اشترك في قناة الرسائل القصيرة الخاصة بالملتقى
                </h4>
                <p class="fs-6 text-white-50 mb-4">
                    الإشتراك في قناة الرسائل القصيرة يوفر لكم الحصول على آخر التحديثات والفعاليات المصاحبة للملتقى
                </p>
                {{-- subscribe form {{ route('subscribe') }} --}}
                <form action="" method="POST" class="row g-6">
                    @csrf
                    <div class="col-md-6">
                        <input class="css-subscribe-input form-control form-control-lg bg-transparent text-white" type="tel"
                            placeholder="ادخل رقم الجوال " aria-label="ادخل رقم الجوال">
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary text-white py-md fs-6 btn-lg px-5">
                            اشترك
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <hr class="text-white-50">
            </div>
            <div class="col-xl-12">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="text-white-50">
                      <img src="{{ asset('images/logo.png') }}" alt="logo" class="css-logo">
                    </a>
                    <p class="fs-6 text-white-50 mb-0">
                        جميع الحقوق محفوظة لملتقى الأسرة السعيدة 2021
                    </p>
                    <div class="d-flex align-items-center">
                        <a href="#" class="text-white-50 me-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M7.92961 1C5.88994 1 4.23647 2.65348 4.23647 4.69315V4.80392L3.86676 4.56084C3.01628 3.99769 1.87032 4.23063 1.30719 5.0811C0.744044 5.93158 0.976975 7.07755 1.82745 7.64068L3.55887 8.7791L3.53234 8.82891C3.09335 9.65339 2.66206 10.4634 2.04695 11.046C1.41806 11.6416 1.04089 12.7152 1.84731 13.0315C2.58403 13.3204 3.50372 13.402 4.6696 13.2821C5.28498 14.2149 6.51388 14.8511 7.92951 14.8511C9.34515 14.8511 10.5741 14.2149 11.1894 13.2821C12.3555 13.4021 13.2754 13.3204 14.0122 13.0315C14.8186 12.7152 14.4415 11.6416 13.8126 11.046C13.1975 10.4634 12.7662 9.65339 12.3272 8.82891L12.3163 8.80841L14.0322 7.64068C14.8826 7.07755 15.1157 5.93158 14.5525 5.0811C13.9894 4.23063 12.8434 3.99769 11.9929 4.56084L11.6227 4.81272V4.69315C11.6227 2.65348 9.96928 1 7.92961 1Z" stroke="white" stroke-width="1.14286" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                        </a>
                        <a href="#" class="text-white-50 me-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                            <path d="M4.72051 11.6021C3.96829 12.1897 3.10491 12.6208 2.18173 12.8699C2.08004 12.9066 1.99219 12.9735 1.93011 13.0615C1.86802 13.1496 1.83472 13.2547 1.83472 13.3622C1.83472 13.4698 1.86802 13.5748 1.93011 13.6629C1.99219 13.751 2.08004 13.8179 2.18173 13.8547C9.47149 16.83 14.1066 12.2308 13.4009 7.12858L14.8569 5.17641L12.6105 4.66646C12.3194 3.58036 11.4259 2.94677 10.4257 2.7653C9.42555 2.58384 8.08047 2.76531 7.28308 3.9667C6.79649 4.69985 6.64386 5.75385 7.1221 7.12849C7.1221 7.12849 5.29989 7.58956 2.2028 4.56179C2.13116 4.49145 2.04074 4.44299 1.94227 4.42218C1.84379 4.40136 1.74139 4.40904 1.64716 4.44432C1.55294 4.4796 1.47086 4.54098 1.41065 4.62122C1.35043 4.70146 1.31459 4.79717 1.30738 4.89705C0.9799 6.23581 1.14378 7.64686 1.76953 8.87613C2.39526 10.1054 3.44173 11.0721 4.72051 11.6021Z" stroke="white" stroke-width="1.14286" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</footer>
