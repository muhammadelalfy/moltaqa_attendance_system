<section class="position-relative overflow-hidden py-10">
    <div class="container">
        <h2 class="h2 text-dark fw-bold lh-lg css-letter-spacing text-center mb-5">
            الاحصائيات
        </h2>
        <div class="row justify-content-center items-center">
            <div class="col-lg-4 text-center">
                <h3 class="h3 fw-normal text-dark mb-6">
                    عدد الزوار
                </h3>
                {{--  --}}
                <div class="position-relative">
                    <img src="{{ asset('images/logoe.svg') }}" alt="" class="img-fluid">
                    {{-- numbers of attendees --}}
                    <span class="fs-2 css-text-in-svg fw-normal text-white position-absolute top-50 start-50">
                        70+
                    </span>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <h3 class="h3 fw-normal text-dark mb-6">
                    عدد الحضور
                </h3>
                {{--  --}}
                <div class="position-relative">
                    <img src="{{ asset('images/logoe.svg') }}" alt="" class="img-fluid">
                    {{-- numbers of attendees --}}
                    <span class="fs-2 css-text-in-svg fw-normal text-white position-absolute top-50 start-50">
                        70+
                    </span>
                </div>
            </div>
        </div>
        <div class="position-absolute css-center-svg css-shape-svg css-shape-svg--left d-lg-block d-none">
            @include('svgs.shape-light')
        </div>
        <div class="position-absolute css-center-svg css-arrow-svg css-arrow-svg--left z-2 d-lg-block d-none">
            @include('svgs.arrow-down')
        </div>
    </div>
</section>
