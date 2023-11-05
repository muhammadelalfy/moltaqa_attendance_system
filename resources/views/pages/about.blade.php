@extends('layouts.app')

@section('title', 'نبذة عن البرنامج')

@section('content')
    <div class="pt-8">
        <div class="container">
            <section class="border rounded-3 p-4">
                <img src="{{ asset('images/about-the-program.jpeg') }}" alt="program" class="img-fluid rounded-3 mb-5">
                <h2 class="h2 text-dark fw-bold mb-4">
                    نبذة عن البرنامج
                </h2>
                <span class="css-tag css-tag-green-light fs-5">
                    نبذة مختصرة
                </span>
                <p class="fs-base text-dark-emphasis lh-pg css-letter-spacing mb-0 mt-3">
                    يعد برنامج "وسائل التواصل الاجتماعي وأثرها على الأسرة" الذي تقدمه جمعية البر الخيرية ببني ظبيان مناسبًا
                    للأسرة والمجتمع والجهات ذات الاختصاص. يهدف البرنامج إلى تسليط الضوء على أثر وسائل التواصل الاجتماعي على
                    حياة الأسرة والمجتمع، وكذلك تقديم نصائح وإرشادات للاستخدام الآمن لهذه الوسائل. يشارك في البرنامج خبراء
                    في مجال التقنية والأسرة، حيث يتم مناقشة موضوعات مثل التأثير النفسي لوسائل التواصل، كيفية حماية أطفالنا
                    من المحتوى غير المناسب، كذلك كيفية استخدام هذه الوسائل بشكل إيجابي في تطور حياتنا. يعد هذا البرنامج فرصة
                    رائعة للاستفادة من خبراء في هذه المجالات والتعرف على أفضل الطرق للاستخدام الآمن والمسؤول لوسائل التواصل
                    الاجتماعي.
                </p>
            </section>
        </div>
        {{--  --}}
        @include('components.statistics')
        {{--  --}}
        @include('components.partners')
    </div>
@endsection
