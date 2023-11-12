@extends('layouts.app')

@section('title', 'نبذة عن البرنامج')

@section('content')
    <main></main>
    <div class="position-relative z-3 start-0 w-100 css-box-over-header">
        <div class="container">
            <div class="bg-white rounded-3 p-5 border"><img class="img-fluid rounded-3 mb-5" src="{{asset('/images/about-the-program.jpeg')}}" alt="نبذة عن الملتلقى"/>
                <h2 class="h2 text-dark fw-bold mb-4">نبذة عن الملتلقى</h2><span class="css-tag bg-primary bg-opacity-10 text-primary border border-primary fs-5">نبذة مختصرة</span>
                <p class="fs-6 text-dark-emphasis lh-xl css-letter-spacing mb-0 mt-3">تقوم فكرة الملتقى على إقامة جلسات حوارية يتحدث فيها خبراء في حماية الأسرة من المخدرات والجرائم الاكترونية، بشرح أهمية الحفاظ على سرية المعلومات الشخصية والحساسة، في أربع جلسات يعرف المستفيدين من خلالها أساليب إستغالل مروجي المخدرات لوسائل التواصل الاجتماعي لترويج سمومهم، وشرح كيفية الكشف عن هذه الأساليب والتعامل معها. وعقد جلسات نقاش حول أفضل الطرق لحماية الأطفال من المخاطر التي يتعرضون لها في عالم الإنترنت، وكذلك يستعرض في هذه الجلسات أبرز التطورات التكنولوجية التي تؤثر على سالمة المستخدمون.</p>
                <p class="fs-6 text-dark-emphasis lh-xl css-letter-spacing mb-0 mt-1">كما يتضمن الملتقى فعاليات مصاحبة من (أركان توعوية وإرشادية والاستشارات من قبل متخصصين في المجال وحفل خطابي يختتم فيه البرنامج الفعاليات والأنشطة).</p>
                <h4 class="h4 fs-5 text-dark fw-bold my-3">المخرجات</h4>
                <ul>
                    <li class="fs-6 text-dark-emphasis mb-2">نشر الوعي في المجتمع والأسر بخطورة المخدرات.</li>
                    <li class="fs-6 text-dark-emphasis mb-2">نشر الوعي في المجتمع وداخل الأسرة في عدم التعامل مع الجهات والأشخاص المجهولين.</li>
                    <li class="fs-6 text-dark-emphasis mb-2">الحصول على دراسة بحثية تدرس التقنية ودورها في انتشار المخدرات داخل الأسرة.</li>
                    <li class="fs-6 text-dark-emphasis mb-2">المدة المتوقعة: 15 دقيقة</li>
                    <li class="fs-6 text-dark-emphasis mb-2">تعزيز معرفة الأسر والمجتمع بمخاطر المخدرات والجرائم الإلكترونية.</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="position-relative overflow-hidden py-10">
        <div class="container">
            <h2 class="h2 text-dark fw-bold lh-lg css-letter-spacing text-center mb-5">الإحصائيات</h2>
            <div class="row justify-content-center items-center">
                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <h3 class="h3 fw-normal text-dark mb-6">عدد زوار المنصة</h3>
                    <div class="position-relative"><img class="img-fluid" src="{{asset('images/logoe.svg')}}" alt=""/><span class="fs-2 css-text-in-svg fw-normal text-white position-absolute top-50 start-50">70+</span></div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <h3 class="h3 fw-normal text-dark mb-6">عدد حضور الملتقى</h3>
                    <div class="position-relative"><img class="img-fluid" src="{{asset('images/logoe.svg')}}" alt=""/><span class="fs-2 css-text-in-svg fw-normal text-white position-absolute top-50 start-50">70+</span></div>
                </div>
            </div>
            <div class="position-absolute css-center-svg css-shape-svg css-shape-svg--left d-lg-block d-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="411" height="613" viewbox="0 0 411 613" fill="none">
                    <path d="M-241 590.503L-95.9629 612.077L410.108 271.37L-153.165 0L-241 590.503Z" fill="url(#paint0_linear_65_15912)" fill-opacity="0.05"></path>
                    <defs>
                        <lineargradient id="paint0_linear_65_15912" x1="142.121" y1="43.9225" x2="54.2858" y2="634.426" gradientunits="userSpaceOnUse">
                            <stop stop-color="#407781"></stop>
                            <stop offset="1" stop-color="#407781" stop-opacity="0"></stop>
                        </lineargradient>
                    </defs>
                </svg>
            </div>
        </div>
    </section>
    <section class="pt-10 position-relative">
        <div class="position-absolute start-0 top-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="796" height="298" viewbox="0 0 796 298" fill="none">
                <path d="M261.991 122.021L205.423 122.021L179.619 93.2354V1L30.6713 1L30.6713 207.376L10.8021 230.198V261.966L-89.4326 261.966V217.296L-89.4326 106.74L-242.25 106.74H-277L-277 140.486L-124.153 140.486L-124.153 251.042V296.687L46.5552 296.687V243.1L66.3957 220.278L66.3957 35.7496L145.901 35.7496V106.138L190.542 156.771H228.274V204.394L340.493 204.394V78.4411L451.049 78.4411V227.904L655.303 227.904V139.511L794.99 139.511V104.79L655.303 104.79V58.5145V23.765L620.554 23.765V58.5145V193.183L484.767 193.183V43.7202L304.769 43.7202V169.673L261.991 169.673V122.021Z" stroke="#043552" stroke-opacity="0.06" stroke-width="1.21026" stroke-miterlimit="10"></path>
            </svg>
        </div>
        <div>
            <h2 class="h2 text-dark fw-bold lh-lg css-letter-spacing text-center mb-5">الشركاء</h2>
            <div class="bg-gray-200 position-relative z-2 pt-6">
                <div class="css-parternars pb-10">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3"><img class="css-parternar-img" src="{{asset('images/parternars/1.png')}}" alt=""/></div>
                            <div class="col-12 col-md-4 col-lg-3"><img class="css-parternar-img" src="{{asset('images/parternars/11.png')}}" alt="" height="100px"/></div>
                            <div class="col-12 col-md-4 col-lg-3"><img class="css-parternar-img" src="{{asset('images/parternars/2.png')}}" alt=""/></div>
                            <div class="col-12 col-md-4 col-lg-3"><img class="css-parternar-img" src="{{asset('images/parternars/3.png')}}" alt=""/></div>
                            <div class="col-12 col-md-4 col-lg-3"><img class="css-parternar-img" src="{{asset('images/parternars/4.png')}}" alt=""/></div>
                            <div class="col-12 col-md-4 col-lg-3"><img class="css-parternar-img" src="{{asset('images/parternars/5.png')}}" alt=""/></div>
                            <div class="col-12 col-md-4 col-lg-3"><img class="css-parternar-img" src="{{asset('images/parternars/6.png')}}" alt=""/></div>
                            <div class="col-12 col-md-4 col-lg-3"><img class="css-parternar-img" src="{{asset('images/parternars/7.png')}}" alt="" height="100px"/></div>
                            <div class="col-12 col-md-4 col-lg-3"><img class="css-parternar-img" src="{{asset('images/parternars/8.png')}}" alt=""/></div>
                            <div class="col-12 col-md-4 col-lg-3"><img class="css-parternar-img" src="{{asset('images/parternars/9.png')}}" alt=""/></div>
                            <div class="col-12 col-md-4 col-lg-3"><img class="css-parternar-img" src="{{asset('images/parternars/10.png')}}" alt=""/></div>
                            <div class="col-12 col-md-4 col-lg-3"><img class="css-parternar-img" src="{{asset('images/parternars/12.png')}}" alt="" height="100px"/></div>
                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <div class="css-parternar-abaad-logo position-absolute start-50 -bottom-50"><img class="img-fluid" src="{{asset('images/abaad.png')}}" alt="" width="200px"/></div>
                </div>
            </div>
            <div class="about-company pt-10">
                <div class="container">
                    <h3 class="h3 text-abaad mt-2 fw-semibold text-end">شركة أبعاد التطويرية</h3>
                    <p class="text-abaad css-letter-spacing lh-xl w-100">شركة سعودية إستشارية تطويرية تنموية متخصصة تهدف إلى تحقيق الجودة والتميز في التدريب وبناء مجتمع المعرفة بما يتوافق مع رؤية المملكة العربية السعودية 2030 بتطبيق الممارسات والمنهجيات العلمية بأحدث الأساليب المبتكرة والتوعية تركز من خلال نشاطها علي تلبية إحتياجات الجهات في القطاعات الحكومية والخاصة وغير الربحية في مجالات الإستشارات الإدارية والبرمجية والتدريب وكذلك السياحة المعرفية</p>
                </div>
            </div>
        </div>
    </section>@endsection
