@extends('layouts.app')

@section('title', 'التواصل معنا')

@section('content')
    <div class="pt-8 pb-16">
        <div class="container">
            <section class="border rounded-3 p-4">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="border rounded-4 p-4">
                            <h4 class="h5 text-dark fw-bold mb-2">
                                شركة أبعاد التطويرية لخدمات الأعمال
                            </h4>
                            <h5 class="h6 text-dark-emphasis">
                                يمكنك التواصل معنا وارسال استفساراتك من خلال
                            </h5>
                            <div class="bg-primary bg-opacity-10 rounded-3 p-3 my-3">
                                {{-- phone --}}
                                <div class="css-contact-section">
                                    <div class="d-flex">
                                        <div class="css-flex-item">
                                            <div class="d-flex align-items-center">
                                                <span class="text-dark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                        viewBox="0 0 16 17" fill="none">
                                                        <path
                                                            d="M1.39893 11.2855C0.794863 12.0253 0.876449 13.1253 1.64616 13.6902C1.93006 13.8986 2.2398 14.1044 2.80102 14.5535C4.30107 15.7541 6.47312 15.7541 7.96784 14.5469C9.07129 13.6558 10.1847 12.7214 11.228 11.6768C12.2714 10.6323 13.2047 9.51764 14.0948 8.41295C15.3006 6.9165 15.3006 4.74197 14.1014 3.24021C13.6317 2.65197 13.432 2.34326 13.215 2.04934C12.6672 1.30721 11.6115 1.20573 10.891 1.7812C9.85804 2.60597 8.90319 3.60145 7.96679 4.44395C8.83623 5.3826 8.50527 5.13463 9.33341 6.019C8.31381 7.7368 7.26121 8.77793 5.57664 9.78007C4.69186 8.94964 4.9381 9.27972 3.99898 8.40777C3.15998 9.33931 2.21848 10.282 1.39893 11.2855Z"
                                                            stroke="#043552" stroke-width="1.5" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                <h5 class="h6 text-dark mb-0 me-2">رقم الهاتف</h5>
                                            </div>
                                            <a href="tel:00966504883053" class="fs-3 text-dark">
                                                00966504883053
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="css-contact-section py-3">
                                    <div class="d-flex align-items-center">
                                        <span class="text-dark">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.25 4.5H5.75C5.3125 4.5 5 4.84375 5 5.25C5 5.6875 5.3125 6 5.75 6H12.25C12.6562 6 13 5.6875 13 5.25C13 4.84375 12.6562 4.5 12.25 4.5ZM9.25 7.5H5.75C5.3125 7.5 5 7.84375 5 8.25C5 8.6875 5.3125 9 5.75 9H9.25C9.65625 9 10 8.6875 10 8.25C10 7.84375 9.65625 7.5 9.25 7.5ZM14.9688 0H2.96875C1.84375 0 0.96875 0.90625 0.96875 2V10.9688C0.96875 12.0625 1.84375 12.9375 2.96875 12.9375H5.96875V15.5312C5.96875 15.8438 6.3125 16 6.5625 15.8438L10.4688 12.9062H14.9688C16.0625 12.9062 16.9688 12 16.9688 10.9375V2C16.9688 0.90625 16.0938 0 14.9688 0ZM15.5 11C15.5 11.2812 15.25 11.5 15 11.5H10L7.5 13.375V11.5H3C2.71875 11.5 2.5 11.2812 2.5 11V2C2.5 1.75 2.71875 1.5 3 1.5H15C15.25 1.5 15.5 1.75 15.5 2V11Z"
                                                    fill="#043552" />
                                            </svg>
                                        </span>
                                        <h5 class="h6 text-dark mb-0 me-2">
                                            لارسال تعليق او الاستفسار
                                        </h5>
                                    </div>
                                    <p class="fs-5 mt-2 text-dark">
                                        رقم المبنى: 4257 - حي الباهر: 6734 - الباحة: 65525
                                    </p>
                                    <div class="d-flex align-items-center mt-3">
                                        <span class="text-dark">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 0C3.5625 0 0 3.59375 0 8C0 12.4375 3.5625 16 8 16C12.4062 16 16 12.4375 16 8C16 3.59375 12.4062 0 8 0ZM8 14.5C4.40625 14.5 1.5 11.5938 1.5 8C1.5 4.4375 4.40625 1.5 8 1.5C11.5625 1.5 14.5 4.4375 14.5 8C14.5 11.5938 11.5625 14.5 8 14.5ZM11.1875 9L8.75 7.59375V3.75C8.75 3.34375 8.40625 3 8 3C7.5625 3 7.25 3.34375 7.25 3.75V8C7.25 8.28125 7.375 8.53125 7.625 8.65625L10.4375 10.2812C10.5312 10.3438 10.6562 10.375 10.8125 10.375C11.0625 10.375 11.3125 10.25 11.4375 10C11.6562 9.65625 11.5312 9.1875 11.1875 9Z"
                                                    fill="#043552" />
                                            </svg>
                                        </span>
                                        <h5 class="h6 text-dark mb-0 me-2">
                                            الاحد - الخميس 7ص - 8 م
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            {{-- button --}}
                            <a href="{{ route('signup-with-us') }}"
                                class="btn btn-outline-dark fw-normal fs-6 py-md px-6 w-100">
                                الانتقال الى خدمة الاستفسارات
                            </a>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="col-xl-8 align-self-center">
                        <div class="text-center">
                            <img src="{{ asset('images/abaad.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    {{-- contact form --}}
                    <div class="pt-4">
                      <div class="clo-xl-12">
                          <h4 class="h5 text-dark fw-bold mb-0">
                              ارسل لنا رسالة
                          </h4>
                          <form action="" method="POST" class="mt-4">
                              @csrf
                              <div class="row">
                                  <div class="col-xl-6 mb-4">
                                      <input type="text" name="name" id="name" class="form-control"
                                          placeholder="الاسم" required>
                                  </div>
                                  {{--  --}}
                                  <div class="col-xl-6 mb-4">
                                      <input type="text" name="phone" id="phone" class="form-control"
                                          placeholder="رقم الجوال" required>
                                  </div>
                              </div>
                              {{--  --}}
                              <div class="mb-4">
                                  <input type="email" name="email" id="email" class="form-control"
                                      placeholder="البريد الالكتروني" required>
                              </div>
                              {{--  --}}
                              <div class="mb-4">
                                  <textarea name="message" id="message" class="form-control" rows="5" placeholder="الرسالة" required></textarea>
                              </div>
                              {{-- submit --}}
                              <div class="d-flex">
                                  <button type="submit" class="btn btn-primary py-md px-6 w-100">
                                      ارسل
                                  </button>
                              </div>
                          </form>
                      </div>
                    </div>
                </div>
            </section>
        </div>
        {{--  --}}
    </div>
@endsection
