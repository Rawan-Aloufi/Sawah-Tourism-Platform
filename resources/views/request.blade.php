@extends('layouts.app')

@section('content')

@auth
    <!-- ✅ نموذج الطلب للمستخدمين المسجلين -->
    <div class="container py-5">
        <h2 class="text-center " style="color: #404e55;">طلب رحلة سياحية</h2>

        <!-- ✅ عرض رسالة نجاح إذا كانت موجودة في السيشن -->
        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="card shadow p-4 mx-auto" style="max-width: 600px;">
            <form action="#" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="trip_name" class="form-label text-dark">اسم الرحلة</label>
                    <input type="text" id="trip_name" name="trip_name" class="form-control bg-light" 
                           value="{{ request('trip') ?? 'اسم الرحلة' }}" >
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label text-dark">الرسالة أو الاستفسار</label>
                    <textarea id="message" name="message" rows="4" class="form-control" placeholder="اكتب تفاصيل طلبك أو استفسارك..."></textarea>
                </div>

                <button type="submit" 
                        class="btn w-100" 
                        style="background-color: #449f95; color: white;">
                    إرسال الطلب
                </button>
            </form>
        </div>
    </div>
@else
    <!-- ❌ يظهر فقط إذا لم يكن المستخدم مسجلاً -->
    @include('unauthorized')
@endauth

@endsection
