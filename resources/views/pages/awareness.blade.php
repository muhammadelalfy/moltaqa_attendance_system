@extends('layouts.app')

@section('title', 'الأسئلة الشائعة')

@section('content')
    <div class="position-relative z-3 start-0 w-100 css-box-over-header">
        <div class="container">
            <div class="bg-white rounded-3 p-5 border">
                <h2 class="h2 text-dark fw-bold mb-3">الرسائل القصيرة , توعية وإرشاد</h2>
                <div class="awareness-container py-4">
                    <h4 class="h4 text-dark fw-semibold">- ظاهرة الادمان مشكلة مجتمع تستوجب يقظة الجميع.</h4>
                    <p class="fs-5 text-dark-emphasis">معرفة ما يفعله الأبناء. يقل احتمال تعاطي المراهقين للماريجوانا بنسبة 20%، عندما يكون الوالدان على معرفة بأماكن وجودهم</p>
                </div>
                <div class="d-flex flex-column flex-md-row gap-3">
                    <button class="js-next-awareness btn bt-lg btn-primary py-md px-4" type="button">اقرا محتوي اخر</button>
                    <button class="js-prev-awareness btn bt-lg btn-outline-primary py-md px-4" type="button">الرجوع للسابق</button>
                </div>
            </div>
        </div>
    </div>


@endsection
