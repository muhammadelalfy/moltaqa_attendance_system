@extends('layouts.app')

@section('title', 'ملتقى أسرة سعودية آمنة')

@section('content')
    {{-- وسائل التواصل الاجتماعي وأثرها على الأسرة --}}
    <section class="position-relative overflow-hidden py-10">
        <div class="container">
            <div class="row flex-lg-row flex-sm-column-reverse">
                <div class="col-xl-6 col-md-12">
                    <h2 class="h2 text-dark fw-bold lh-lg css-letter-spacing mb-4">وسائل التواصل الاجتماعي وأثرها على الأسرة
                    </h2>
                    <p class="fs-base text-dark lh-pg css-letter-spacing mb-5">
                        لوسائل التواصل الاجتماعي أهمية كبرى تكمن في إتاحة مجال واسعاً أمام الإنسان للتعبير عن نفسه ومشاركة
                        مـشاعره وأفكاره مع الآخرين، خاصة وأن هناك حقيقة علمية وهي أن الإنسان اجتماعي بطبعـه وبفطرته يتواصل
                        مع الآخرين ولا يمكن له أن يعيش في عزلة عن أخيه الإنسان. وقـد أثبتت كثير من الدراسات والبحوث العلمية
                        أن الإنسان لايستطيع إشباع جميع حاجاتـه البيولوجية والنفسية دون التواصل مع الآخرين فحاجاته هذه تفرض
                        عليه العيش مـع الآخرين لإشباع هذه الحاجات. أما الاحتياجات الاجتماعية فلا يمكن أن تقوم أساساً دون
                        تواصل إنساني مع المحيط الاجتماعي ولذلك فالإنسان كائن اجتماعي بطبيعته لايمكـن أن يعيش بمفرده، وعليه
                        كان لابد علينا أن نوعي المجتمع بوسائل التواصل الاجتماعي وأثرها على الأسرة وإيجابيها وسلبياتها
                        وآثارها وطرق علاجها.
                    </p>
                    {{-- buttons --}}
                    <div class="d-grid gap-4 d-md-flex justify-content-md-start">
                        <a href="{{ route('signup-with-us') }}" class="btn btn-primary text-white fw-normal fs-6 py-md px-6">
                            الهدف العام
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary fw-normal fs-6 py-md px-5">
                            الاهداف التفصيلية
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 position-relative">
                    <img src="{{ asset('images/contact-image-2.jpeg') }}"
                        class="img-fluid css-overide-image-bottom rounded-4 overflow-hidden md-0 mb-sm-4" alt="Hero">
                    <img src="{{ asset('images/contact-image-1.jpeg') }}"
                        class="img-fluid css-overide-image-top rounded-4 overflow-hidden d-lg-block d-none" alt="Hero">
                </div>
                <div class="css-abstract-group">
                    <svg class="position-absolute css-abstract--right" xmlns="http://www.w3.org/2000/svg" width="251"
                        height="1065" viewBox="0 0 251 1065" fill="none">
                        <path
                            d="M174.615 179.529L174.615 318.502L21.6453 318.502L21.6453 502.723L214.465 502.723L214.465 546.504L165.695 546.504L165.695 604.4L136.234 630.81L12.0498 630.81L12.0498 783.252L137.935 783.252L161.293 803.587L193.806 803.587L193.806 906.174L148.089 906.174L86.1433 906.174L86.1433 1028.45L86.1433 1063.99L120.681 1063.99L120.681 941.709L182.626 941.709L229.342 941.709L229.342 766.995L174.498 766.995L151.14 746.689L47.6147 746.689L47.6146 665.318L149.438 665.318L201.26 619.63L201.26 581.013L250 581.013L250 466.161L57.1808 466.161L57.1808 353.01L210.18 353.01L210.18 143.964L119.684 143.964L119.684 0.999782L84.1479 0.999783L84.1479 143.964L36.7868 143.964L1.25117 143.964L1.25117 179.529L36.7868 179.529L174.615 179.529Z"
                            stroke="#6ABF4B" stroke-opacity="0.06" stroke-width="1.88598" stroke-miterlimit="10" />
                    </svg>
                    <svg class="position-absolute css-abstract--left" xmlns="http://www.w3.org/2000/svg" width="251"
                        height="1065" viewBox="0 0 251 1065" fill="none">
                        <path
                            d="M174.615 179.529L174.615 318.502L21.6453 318.502L21.6453 502.723L214.465 502.723L214.465 546.504L165.695 546.504L165.695 604.4L136.234 630.81L12.0498 630.81L12.0498 783.252L137.935 783.252L161.293 803.587L193.806 803.587L193.806 906.174L148.089 906.174L86.1433 906.174L86.1433 1028.45L86.1433 1063.99L120.681 1063.99L120.681 941.709L182.626 941.709L229.342 941.709L229.342 766.995L174.498 766.995L151.14 746.689L47.6147 746.689L47.6146 665.318L149.438 665.318L201.26 619.63L201.26 581.013L250 581.013L250 466.161L57.1808 466.161L57.1808 353.01L210.18 353.01L210.18 143.964L119.684 143.964L119.684 0.999782L84.1479 0.999783L84.1479 143.964L36.7868 143.964L1.25117 143.964L1.25117 179.529L36.7868 179.529L174.615 179.529Z"
                            stroke="#6ABF4B" stroke-opacity="0.06" stroke-width="1.88598" stroke-miterlimit="10" />
                    </svg>
                </div>
                <div class="">
                </div>
            </div>
        </div>
    </section>
    {{-- الفكرة والوصف --}}
    <section class="css-bg-gradient position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-12 position-relative z-2">
                    <h2 class="h2 text-white fw-bold lh-lg css-letter-spacing mb-4">الفكرة والوصف</h2>
                    <p class="fs-6 text-white lh-pg css-letter-spacing">
                        تقوم فكرة البرنامج على إقامة برنامج علمي متخصص في مجال التقنية ووسائل التواصل الاجتماعي يسلط الضوء
                        على أهم المعارف والخبرات والتجارب المحلية والعالمية التي تتمحور
                        حول استثمار التقنية والاستفادة من مزاياها والتصدي لأخطارها بطرق عملية وعلمية فاعلة، ونتطلع من
                        البرنامج للخروج بتوصيات مؤثرة تسهم في رفع الوعي لدى المجتمع و المؤسسات بأهمية استدراك آثار التقنية
                        على الأسرة، وآليات استثمارها بما يخدم وحدة الأسرة ودورها الأساسي في التنمية هذا البرنامج يأتي يهدف
                        لنشر الوعي، وبحث أهم قضايا الأسرة التي تؤثر بشكل مباشر في حياتها وترابطها، ودورها في تماسك النسيج
                        الاجتماعي وتنمية الوطن.
                    </p>
                </div>
                <div class="col-xl-6 col-md-12 p-4 position-relative start-0 ">
                    @include('svgs.idea-and-description')
                </div>
            </div>
            <div class="position-absolute top-50 css-map-svg z-1">
                @include('svgs.map')
            </div>
        </div>
    </section>
    {{-- الفعاليات --}}
    @include('components.activities')
    {{--  --}}
    @include('components.statistics')
    {{-- الشركاء --}}
    @include('components.partners')
@endsection
