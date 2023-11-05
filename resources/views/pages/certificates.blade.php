@extends('layouts.app')

@section('title', 'استخراج الشهادات')

@section('content')
{{-- --}}
<div class="pt-8 pb-16">
  <div class="container">
    <h2 class="h2 text-dark fw-bold mb-4">
      استخراج الشهادة
    </h2>
    <section class="">
      <form action="" method="POST" class="js-multi-step-form mt-4 js-validate" novalidate>
        @csrf
        <div class="border p-5 rounded-4 js-step css-step row" id="step-1">
          <h4 class="h4 text-dark fw-semibold mb-4">
            ابحث برقم الجوال للحصول علي الشهادة
          </h4>
          <div class="col-12 mb-4">
            <label for="phone" class="form-label text-dark-emphasis">رقم الجوال<span class="d-inline-block text-red">*</span></label>
            <input type="text" name="phone" id="phone" class="form-control"
                placeholder="رقم الجوال" required>
          </div>
          <div class="col-12 d-flex pt-4">
            <button type="submit" class="js-next btn btn-primary text-white py-md px-6 w-100">
              بحث
            </button>
          </div>
        </div>
        {{-- OTP --}}
        <div class="border p-5 rounded-4 js-step css-step row" id="step-2">
          <div class="col-12 mb-4">
            <label for="otp" class="form-label text-dark-emphasis">رمز التحقق<span class="d-inline-block text-red">*</span></label>
            <input type="text" name="otp" id="otp" class="form-control"
                placeholder="رمز التحقق" required>
          </div>
          <div class="col-12 d-flex pt-4">
            <button type="submit" class="js-next btn btn-primary text-white py-md px-6 w-100" data-bs-toggle="modal" data-bs-target="#validCertificate">
              استخراج الشهادة
            </button>
          </div>
        </div>
        {{--  --}}
        <div class="js-step css-step row" id="step-3">
          <div class="text-center ">
              <div class="container">
                  <h2 class="h2 text-abaad fw-bold mb-4">
                      استخراج الشهادات
                  </h2>
                  <figure>
                      <img src="{{ asset('images/certificate.png') }}" alt="certificates" class="img-fluid">
                  </figure>
                  <div class="css-certificate">

                  </div>
                  <div class="d-flex gap-4 justify-content-center">
                      {{-- Download --}}
                      <a href="{{ asset('files/certificate.pdf') }}" class="btn btn-primary py-md px-6">
                          تحميل الشهادة
                      </a>
                      {{-- share --}}
                      <a href="#" class="btn btn-dark py-md">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                              fill="none">
                              <path
                                  d="M20.8327 6C20.8327 7.65685 19.4336 9 17.7077 9C16.9513 9 16.2577 8.74205 15.7172 8.31278L10.3539 11.402C10.3946 11.5953 10.416 11.7952 10.416 12C10.416 12.2048 10.3946 12.4047 10.3539 12.598L15.7172 15.6872C16.2577 15.258 16.9513 15 17.7077 15C19.4336 15 20.8327 16.3431 20.8327 18C20.8327 19.6569 19.4336 21 17.7077 21C15.9818 21 14.5827 19.6569 14.5827 18C14.5827 17.7952 14.6041 17.5952 14.6448 17.4019L9.28161 14.3127C8.74102 14.742 8.0474 15 7.29102 15C5.56513 15 4.16602 13.6569 4.16602 12C4.16602 10.3431 5.56513 9 7.29102 9C8.0474 9 8.74102 9.25798 9.28161 9.68728L14.6448 6.59809C14.6041 6.40482 14.5827 6.2048 14.5827 6C14.5827 4.34315 15.9818 3 17.7077 3C19.4336 3 20.8327 4.34315 20.8327 6Z"
                                  fill="white" />
                          </svg>
                      </a>
                  </div>
              </div>
            </div>
        </div>
      </form>
    </section>
  </div>
</div>

@include('components.certificate.valid-certificate-modal')

@endsection
