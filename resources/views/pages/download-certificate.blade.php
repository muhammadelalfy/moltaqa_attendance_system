@extends('layouts.auth')

@section('title', 'استخراج الشهادات')

@section('content')
    {{-- --}}
    <div class="position-relative z-3 start-0 w-100 css-box-over-header">
        <div class="container">
            <div class="bg-white rounded-3 p-5 border">
                <div class="border-bottom">
                    <h2 class="h2 text-dark fw-bold mb-4">استخراج الشهادة</h2>
                </div>
{{--                <form id="form1" class="mt-4" action="#" method="POST" novalidate="">--}}
                    @csrf
                    <div class="row"  >
                        <div class="text-center pt-4" id="content">
                            <div class="container">
                                <h2 class="h2 text-primary fw-bold mb-4">استخراج الشهادة</h2>
                                <div class="css-certificate mb-3" id="certificate">
                                    <svg id="certificateSVG" version="1.1" xmlns="http://www.w3.org/2000/svg" >
                                        <!-- Your fixed background image or design-->
                                        <image id="certificateImage"
                                               xlink:href="{{asset('images/remote-presence.jpg')}}" x="0"
                                               y="0"></image>
                                        <!-- Text element for the user name-->
                                        <text x="400" y="318" text-anchor="middle" font-family="Arial"
                                              font-weight="bold" font-size="18"
                                              fill="#474747">{{auth()->user()->name}}</text>
                                        <!-- Placeholder for the QR code-->

                                        <image id="qrCode" xlink:href="images/qrcode.png" x="350" y="425" width="100"
                                               height="100"></image>

                                        <!-- Text element for the certificate ID-->
                                        <text id="certificateID" x="395" y="558" font-family="Arial"
                                              font-weight="bold" font-size="16"
                                              fill="#474747">{{$certificate_number}}</text>
                                    </svg>
                                </div>
                                <div class="d-flex flex-column flex-md-row gap-4 justify-content-center">
                                    <a
                                            class="btn btn-primary py-md px-2 px-md-6 w-100 mb-1 btn-download">تحميل الشهادة
                                    </a>

                                    <button class="btn btn-primary py-md w-100 mb-1" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                             viewbox="0 0 25 24" fill="none">
                                            <path
                                                d="M20.8327 6C20.8327 7.65685 19.4336 9 17.7077 9C16.9513 9 16.2577 8.74205 15.7172 8.31278L10.3539 11.402C10.3946 11.5953 10.416 11.7952 10.416 12C10.416 12.2048 10.3946 12.4047 10.3539 12.598L15.7172 15.6872C16.2577 15.258 16.9513 15 17.7077 15C19.4336 15 20.8327 16.3431 20.8327 18C20.8327 19.6569 19.4336 21 17.7077 21C15.9818 21 14.5827 19.6569 14.5827 18C14.5827 17.7952 14.6041 17.5952 14.6448 17.4019L9.28161 14.3127C8.74102 14.742 8.0474 15 7.29102 15C5.56513 15 4.16602 13.6569 4.16602 12C4.16602 10.3431 5.56513 9 7.29102 9C8.0474 9 8.74102 9.25798 9.28161 9.68728L14.6448 6.59809C14.6041 6.40482 14.5827 6.2048 14.5827 6C14.5827 4.34315 15.9818 3 17.7077 3C19.4336 3 20.8327 4.34315 20.8327 6Z"
                                                fill="white"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                </form>--}}
            </div>
        </div>
    </div>

    @include('components.certificate.valid-certificate-modal')
    @push('scripts')
        <script src="{{asset('assets/js/jspdf.debug.js')}}"></script>
        <script src="{{asset('assets/js/html2canvas.min.js')}}"></script>
        <script src="{{asset('assets/js/html2pdf.bundle.min.js')}}"></script>


            <script>
                const options = {
                margin: 0.5,
                filename: 'certificate.pdf',
                image: {
                type: 'jpeg',
                quality: 500
            },
                html2canvas: {
                scale: 1
            },
                jsPDF: {
                unit: 'in',
                format: 'letter',
                orientation: 'portrait'
            }
            }


                $('.btn-download').click(function(e){
                e.preventDefault();
                const element = document.getElementById('certificate');
                html2pdf().from(element).set(options).save();
            });

        </script>
    @endpush
@endsection
