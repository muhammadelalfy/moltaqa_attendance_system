<section class="position-relative py-10">
  <div class="container">
      <div class="position-relative z-3">
          <h2 class="h2 text-primary-700 fw-bold lh-lg css-letter-spacing mb-4">الفعاليات</h2>
          <div class="row ">
              <div class="col-xl-3 mb-lg-0 mb-4">
                  <div class="card bg-white rounded-3">
                      <img src="{{ asset('images/activities/activity-1.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body border-top py-4">
                          <h5 class="h4 text-primary-700 fw-bold mb-2">الجلسة الاولي</h5>
                          <p class="fs-5 mb-3 text-primary-700 card-text">
                              15 دقيقة 07:46 حتى 08:00
                          </p>
                          {{-- date --}}
                          <h5 class="h6 text-primary-700 mb-2">
                              28 نوفمبر
                          </h5>
                          {{-- Location --}}
                          <h6 class="h6 text-primary-700">
                              مركز الامير حسام للمعارض والمؤتمرات
                          </h6>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 mb-lg-0 mb-4">
                  <div class="card bg-white rounded-3">
                      <img src="{{ asset('images/activities/activity-2.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body border-top py-4">
                          <h5 class="h4 text-primary-700 fw-bold mb-2">الجلسة الاولي</h5>
                          <p class="fs-5 mb-3 text-primary-700 card-text">
                              15 دقيقة 07:46 حتى 08:00
                          </p>
                          {{-- date --}}
                          <h5 class="h6 text-primary-700 mb-2">
                              28 نوفمبر
                          </h5>
                          {{-- Location --}}
                          <h6 class="h6 text-primary-700">
                              مركز الامير حسام للمعارض والمؤتمرات
                          </h6>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 mb-lg-0 mb-4">
                  <div class="card bg-white rounded-3">
                      <img src="{{ asset('images/activities/activity-3.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body border-top py-4">
                          <h3 class="h4 text-primary-700 fw-semibold mb-2">الجلسة الاولي</h3>
                          <p class="fs-5 mb-3 text-primary-700 card-text">
                              15 دقيقة 07:46 حتى 08:00
                          </p>
                          {{-- date --}}
                          <h5 class="h6 text-primary-700 mb-2">
                              28 نوفمبر
                          </h5>
                          {{-- Location --}}
                          <h6 class="h6 text-primary-700">
                              مركز الامير حسام للمعارض والمؤتمرات
                          </h6>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 mb-lg-0 mb-4">
                  <div class="card bg-white rounded-3">
                      <img src="{{ asset('images/activities/activity-4.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body border-top py-4">
                          <h3 class="h4 text-primary-700 fw-semibold mb-2">الجلسة الاولي</h3>
                          <p class="fs-5 mb-3 text-primary-700 card-text">
                              15 دقيقة 07:46 حتى 08:00
                          </p>
                          {{-- date --}}
                          <h5 class="h6 text-primary-700 mb-2">
                              28 نوفمبر
                          </h5>
                          {{-- Location --}}
                          <h6 class="h6 text-primary-700">
                              مركز الامير حسام للمعارض والمؤتمرات
                          </h6>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="position-absolute css-center-svg css-shape-svg css-shape-svg--right d-lg-block d-none">
          @include('svgs.shape')
      </div>
      <div class="position-absolute css-center-svg css-arrow-svg css-arrow-svg--right z-2 d-lg-block d-none">
          @include('svgs.arrow-down')
      </div>
  </div>
</section>
