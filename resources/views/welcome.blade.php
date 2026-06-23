<style>
    .btn-primary,
    .btn-outline-primary {
        background-color: #449f95 !important;
        border-color: #449f95 !important;
        color: white !important;
    }
</style>

@extends('layouts.app')


@section('content')

<div class="container py-5">
<div class="text-center my-4">
    <img src="{{ asset('images/logo.png') }}" alt="شعار سواح" style="height: 180px;">
</div>

<h1 class="text-center mb-5" style="color: #404e55;">مرحبًا بك في منصة سواح</h1>
<h3 class="text-center mb-5" style="color: #404e55;">ابدأ رحلتك مع سواح، واكتشف الأماكن السياحية في المملكة العربية السعودية و شارك تجربتك مع الاخرين</h3>


    <div class="row gy-4">
        {{-- كرت 1 --}}
        <div class="col-12 col-sm-6 col-md-4 mb-4" data-city="العلا" data-price="50" data-rating="4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('images/alula.jpg') }}" class="card-img-top img-fluid" alt="العلا">
                <div class="card-body">
                    <h5 class="card-title">موقع العلا التاريخي</h5>
                    <p class="card-text text-success fw-semibold">معلم سياحي</p>
                    <p class="card-text text-muted">العلا</p>
                    <div class="mb-2">
                        <span class="text-warning">★ ★ ★ ★ ☆</span>
                        <span class="text-muted">(4.5)</span>
                        <p class="card-text text-muted">ملاحظات : أول موقع سعودي على اليونسكو</p>
                    </div>
                    <div class="text-end mb-2">
                        <span class="fw-bold text-dark">الدخول: 50 ريال</span>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('request.create', ['trip' => 'العلا']) }}" class="btn btn-outline-primary w-100">طلب رحلة</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- كرت 2 --}}
        <div class="col-12 col-sm-6 col-md-4 mb-4" data-city="الرياض" data-price="850" data-rating="5">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('images/riyadh-hotel.jpg') }}" class="card-img-top img-fluid" alt="فندق الرياض">
                <div class="card-body">
                    <h5 class="card-title">فندق الريتز كارلتون</h5>
                    <p class="card-text text-success fw-semibold">فندق</p>
                    <p class="card-text text-muted">الرياض</p>
                    <div class="mb-2">
                        <span class="text-warning">★ ★ ★ ★ ★</span>
                        <span class="text-muted">(5.0)</span>
                        <p class="card-text text-muted">ملاحظات : فندق خمس نجوم</p>
                    </div>
                    <div class="text-end mb-2">
                        <span class="fw-bold text-dark">السعر: +850 ريال</span>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('request.create', ['trip' => 'الرياض']) }}" class="btn btn-outline-primary w-100">طلب رحلة</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- كرت 3 --}}
        <div class="col-12 col-sm-6 col-md-4 mb-4" data-city="جدة" data-price="0" data-rating="4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('images/jeddah-corniche.jpg') }}" class="card-img-top img-fluid" alt="كورنيش جدة">
                <div class="card-body">
                    <h5 class="card-title">كورنيش جدة</h5>
                    <p class="card-text text-success fw-semibold">معلم سياحي</p>
                    <p class="card-text text-muted">جدة</p>
                    <div class="mb-2">
                        <span class="text-warning">★ ★ ★ ★ ☆</span>
                        <span class="text-muted">(4.2)</span>
                        <p class="card-text text-muted">ملاحظات : مطاعم و حدائق و جلسات</p>
                    </div>
                    <div class="text-end mb-2">
                        <span class="fw-bold text-dark">الدخول: مجاني</span>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('request.create', ['trip' => 'جدة']) }}" class="btn btn-outline-primary w-100">طلب رحلة</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- كرت 4 --}}
        <div class="col-12 col-sm-6 col-md-4 mb-4" data-city="العلا" data-price="1200" data-rating="5">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('images/alula-hotel.jpg') }}" class="card-img-top img-fluid" alt="فندق الحجر في العلا">
                <div class="card-body">
                    <h5 class="card-title">فندق حِجر</h5>
                    <p class="card-text text-success fw-semibold">فندق</p>
                    <p class="card-text text-muted">العلا</p>
                    <div class="mb-2">
                        <span class="text-warning">★ ★ ★ ★ ★</span>
                        <span class="text-muted">(5.0)</span>
                        <p class="card-text text-muted">ملاحظات : فندق صحراوي بإطلالة ساحرة</p>
                    </div>
                    <div class="text-end mb-2">
                        <span class="fw-bold text-dark">السعر: 1200 ريال</span>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('request.create', ['trip' => 'العلا']) }}" class="btn btn-outline-primary w-100">طلب رحلة</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
