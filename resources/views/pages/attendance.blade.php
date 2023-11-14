@extends('layouts.app')

@section('title', 'سجل معنا')

@section('content')
    <div class="position-relative z-3 start-0 w-100 css-box-over-header">
        <div class="container">
            <div class="bg-white rounded-3 p-5 border">
                <section>
                    <h2 class="h2 text-dark">ملتقى أسرة سعودية آمنة </h2>
                    <h5 class="h4 text-dark">  مرحبًا بكم في ملتقى أسرة سعودية آمنة النسخة الثالثة لسنة 2023  يمكنك حضور الملتقى في مركز الأمير حسام للمعارض والمؤتمرات  فى 28 نوفمبر 2023 أو عبر البث المباشر من خلال هذه المنصة. يسعدنا حضوركم في هذا الحدث المميز.</h5>
                </section>
                <section class="py-5">
                    <div class="card flex-lg-row bg-white rounded-3"><img class="flex-grow-0" src="{{asset('/images/activities/activity-1.jpg')}}" alt="..."/>
                        <div class="card-body py-4">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div class="css-flex-item">
                                    <h3 class="h3 text-primary-700 fw-bold mb-2">الموضوع: الجرائم الإلكترونية أنواعها و تأثيرها على الأسرة</h3>
                                    <p class="fs-4 mb-3 text-primary-700 card-text">تاريخ البرنامج: 28 نوفمبر 2023</p>
                                </div>
                                <div class="css-flex-item">
                                    <h5 class="h5 text-primary-700 mb-2">وقت البدء: 4:26 حتى 4:40</h5>
                                    <h5 class="h5 text-primary-700 mb-2">المدة المتوقعة: 15 دقيقة</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pb-4 mb-4 border-bottom text-center">
                    <p class="fs-4 text-dark lh-xl css-letter-spacing mb-0">يهدف ملتقى أسرة سعودية آمنة إلى تعزيز المعرفة والحوار حول مواضيع مهمة. نحن متشوقون لرؤيتكم جميعًا هناك!</p>
                    <p class="fs-4 text-dark italic lh-xl css-letter-spacing">شكرًا لحضوركم ومساهمتكم في هذا الملتقى المهم.</p>
                    <button class="btn btn-primary btn-lg px-4" id="jsStartMeeting">انضم للبث المباشر</button>
                    <div class="text-center" id="jsCountdown"></div>
                </section>
                <section>
                    <h2 class="h3 text-dark">نصائح قبل الإنطلاق</h2>
                    <ol>
                        <li class="fs-4 text-dark-emphasis"> لتحقق من الإتصال: تأكد من إستقرار إتصال الإنترنت لتجربة بث سلسه.</li>
                        <li class="fs-4 text-dark-emphasis">التحضير المسبق: إذا كان هناك مواضيع محددة ستناقش في الملتقى، فقد تكون من الجيد الإستعداد للمشاركة.</li>
                    </ol>
                    <div id="zmmtg-root"></div>
                </section>
            </div>
        </div>
    </div>

@endsection
