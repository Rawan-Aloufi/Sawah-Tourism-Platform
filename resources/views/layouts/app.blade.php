<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سواح</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
    
        body {
            background-color: #f0f2f7;
            font-family: 'Cairo', sans-serif !important;
        }
        .navbar-custom {
            background-color: #28394d;
        }
        .navbar-custom .nav-link,
        .navbar-custom .navbar-brand {
            color: #fff !important;
        }
        .nav-link:hover {
            color: #449f95 ;
            text-decoration: underline;
        }
        .footer {
            background-color: #28394d;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- ✅ Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="/">سواح</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon bg-light rounded"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">الصفحة الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/request') }}">طلب رحلة</a></li>
                    <li class="nav-item"><a class="nav-link" href="/recommendations">التوصيات</a></li>
                    @auth
                        <li class="nav-item"><a class="nav-link" href="/dashboard">لوحة التحكم</a></li>

                        <li class="nav-item">
                           <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link" style="padding: 0; border: none; background: none;">
                        تسجيل الخروج
                            </button>
                        </form>

                    @else
                        <li class="nav-item"><a class="nav-link" href="/login">تسجيل الدخول</a></li>
                        <li class="nav-item"><a class="nav-link" href="/register">إنشاء حساب</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- ✅ محتوى الصفحة -->
    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- ✅ Footer -->
    <footer class="footer mt-5">
        <div class="container">
            جميع الحقوق محفوظة © 2025 - سواح
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
