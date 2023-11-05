@extends('layouts.no-header')

@section('title', 'الأسئلة الشائعة')

@section('content')
    <h2 class="h2 text-dark fw-bold mb-3">
      الرسائل القصيرة , توعية وإرشاد
    </h2>
    <div class="py-4">
      <h4 class="h4 text-dark fw-semibold">
        - ظاهرة الادمان مشكلة مجتمع تستوجب يقظة الجميع.
      </h4>
      <p class="fs-5 text-dark-emphasis">
        معرفة ما يفعله الأبناء. يقل احتمال تعاطي المراهقين للماريجوانا بنسبة 20%، عندما يكون الوالدان على معرفة بأماكن وجودهم
      </p>
    </div>
    {{--  --}}
    <div class="d-flex gap-4">
      <button class="btn bt-lg btn-primary py-md px-6" type="button">
        اقرا محتوي اخر
      </button>
      {{-- الرجوع للسابق --}}
      <button class="btn bt-lg btn-outline-primary py-md px-6" type="button">
        الرجوع للسابق
      </button>
    </div>

@endsection
