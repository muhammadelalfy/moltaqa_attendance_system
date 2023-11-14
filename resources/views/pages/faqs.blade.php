@extends('layouts.app')

@section('title', 'الأسئلة الشائعة')

@section('content')
    <div class="position-relative z-3 start-0 w-100 css-box-over-header">
        <div class="container">
            <div class="bg-white rounded-3 p-5 border">
                <h2 class="h2 text-dark fw-bold mb-3">الأسئلة الشائعة</h2>
                <div class="accordion" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">متى موعد الملتقى؟</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="flush-collapseOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                في 28نوفمبر2023
                                وفي حال تم تعديل الموعد سيتم ابلاغ جميع المسجلين بذلك.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">هل سيكون الملتقى عن بُعد؟</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="flush-collapseTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">سيكون الملتقى حضورياً.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">أين سيقام الملتقى؟</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="flush-collapseThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">سيقام بإذن الله في مركز الأمير حسام للمعارض والمؤتمرات. وفي حال تم تغيير المقر سيتم إبلاغ جميع المسجلين بذلك.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">متى وقت بدء الملتقى؟</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="flush-collapse4" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">ستبدأ جلسات الملتقى والفعاليات المصاحبة عند الساعة 03:50 مساءً.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">ما هي الفعاليات المصاحبة للملتقى؟</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="flush-collapse5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">سيكون هناك أركان لعدد من الجهات المشاركة بالملتقى تقدم للحضور التوعية والإرشاد بمخاطر المخدرات وأساليب مروجيها واستغلالهم لوسائل التواصل الاجتماعي لترويج تلك السموم. وحفل خطابي ومسيرة للمقبلين على الزواج.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">هل يوجد شهادات حضور؟</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="flush-collapse6" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">نعم يوجد شهادات حضور للملتقى تصدر من خلال المنصة.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">هل الحضور للجنسين؟</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="flush-collapse7" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">نعم الحضور للنساء والرجال.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
