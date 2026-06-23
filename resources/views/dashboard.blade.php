@extends('layouts.app')

@section('content')

<style>
    /* ألوان الموقع */
    :root {
        --primary-color: #449f95;
        --secondary-color: #28394d;
        --bg-color: #f0f2f7;
        --text-color: #404e55;
    }

    body {
        background-color: var(--bg-color);
        color: var(--text-color);
    }

    .main-content {
        padding: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .welcome-card {
        background: linear-gradient(135deg, var(--primary-color), #36a598);
        color: white;
        padding: 30px;
        border-radius: 15px;
        margin-bottom: 30px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .feature-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        padding: 25px;
        margin-bottom: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }

    .feature-card h3 {
        color: var(--primary-color);
        margin-bottom: 15px;
        font-size: 1.3rem;
    }

    .btn-primary-custom {
        background-color: var(--primary-color);
        border: none;
        color: white;
        padding: 12px 25px;
        border-radius: 8px;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s ease;
        font-weight: 500;
    }

    .btn-primary-custom:hover {
        background-color: #3a8a81;
        color: white;
        text-decoration: none;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .stat-card {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .stat-number {
        font-size: 2rem;
        font-weight: bold;
        color: var(--primary-color);
    }

    .user-info {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        border-left: 4px solid var(--primary-color);
    }
</style>

<div class="main-content">

    <div class="welcome-card">
        <h1>مرحباً {{ Auth::user()->name }}</h1>
        <p>نحن سعداء بوجودك معنا في منصة السياحة الخاصة بنا</p>
        <p>استكشف الأماكن السياحية الرائعة واحجز رحلتك القادمة</p>
    </div>

    <div class="user-info">
        <h3>معلومات حسابك</h3>
        <p><strong>الاسم:</strong> {{ Auth::user()->name }}</p>
        <p><strong>البريد الإلكتروني:</strong> {{ Auth::user()->email }}</p>
        <p><strong>نوع العضوية:</strong> عضو</p>
        <p><strong>تاريخ التسجيل:</strong> {{ Auth::user()->created_at->format('Y/m/d') }}</p>
    </div>

    <!-- إحصائيات المستخدم -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-number">0</div>
            <p>الرحلات المحجوزة</p>
        </div>
        <div class="stat-card">
            <div class="stat-number">0</div>
            <p>الطلبات المرسلة</p>
        </div>
        <div class="stat-card">
            <div class="stat-number">0</div>
            <p>الأماكن المفضلة</p>
        </div>
    </div>

    <!-- خدمات المتاحة للمستخدم -->
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="feature-card">
                <h3>🏨 استكشاف الأماكن</h3>
                <p>تصفح مجموعة واسعة من الأماكن السياحية والفنادق الرائعة في المملكة العربية السعودية</p>
                <a href="#" class="btn-primary-custom">تصفح الأماكن</a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="feature-card">
                <h3>📝 طلب رحلة</h3>
                <p>قم بطلب رحلة مخصصة تناسب احتياجاتك وميزانيتك مع فريقنا المتخصص</p>
                <a href="{{ route('request.create') }}" class="btn-primary-custom">طلب رحلة</a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="feature-card">
                <h3>⭐ التوصيات</h3>
                <p>احصل على توصيات مخصصة بناءً على تفضيلاتك واستمتع بتجربة سياحية مميزة</p>
                <a href="{{ route('recommendations') }}" class="btn-primary-custom">عرض التوصيات</a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="feature-card">
                <h3>👤 إدارة الحساب</h3>
                <p>قم بتحديث معلومات حسابك الشخصي وتغيير كلمة المرور حسب الحاجة</p>
                <a href="{{ route('profile.edit') }}" class="btn-primary-custom">إدارة الحساب</a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="feature-card">
                <h3>📞 اتصل بنا</h3>
                <p>لديك استفسار أو تحتاج مساعدة؟ فريق الدعم جاهز لمساعدتك في أي وقت</p>
                <a href="#" class="btn-primary-custom">اتصل بنا</a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="feature-card">
                <h3>📈 نشاطي</h3>
                <p>تابع نشاطاتك السابقة، الرحلات المحجوزة، والتقييمات التي قمت بها</p>
                <a href="#" class="btn-primary-custom">عرض النشاط</a>
            </div>
        </div>
    </div>

    <div style="text-align: center; margin-top: 40px; padding: 20px; background-color: white; border-radius: 10px;">
        <h3>نحن هنا لخدمتك</h3>
        <p>إذا كان لديك أي استفسار أو تحتاج مساعدة، لا تتردد في التواصل معنا. فريقنا متاح على مدار الساعة لضمان تجربة سياحية مميزة لك.</p>
    </div>

</div>

@endsection
