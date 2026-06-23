@extends('layouts.app')

@section('content')

<style>
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

    .register-container {
        max-width: 400px;
        margin: 50px auto;
        background: white;
        padding: 30px 25px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .register-container h2 {
        text-align: center;
        color: var(--primary-color);
        margin-bottom: 25px;
    }

    .form-control {
        border: 1.5px solid var(--secondary-color);
        border-radius: 6px;
        padding: 10px 12px;
        font-size: 1rem;
        margin-bottom: 20px;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--primary-color);
        outline: none;
        box-shadow: 0 0 5px var(--primary-color);
    }

    .btn-primary {
        background-color: var(--primary-color) !important;
        border-color: var(--primary-color) !important;
        color: white !important;
        width: 100%;
        padding: 12px;
        font-size: 1.1rem;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #357c75 !important;
        border-color: #357c75 !important;
    }

    .text-center {
        text-align: center;
    }

    .login-link {
        margin-top: 15px;
        display: block;
        text-align: center;
        color: var(--secondary-color);
        text-decoration: none;
    }

    .login-link:hover {
        text-decoration: underline;
        color: var(--primary-color);
    }
</style>

<div class="register-container">
    <h2>إنشاء حساب جديد</h2>
    <form action="#" method="POST">
        @csrf
        <input type="text" name="name" placeholder="الاسم الكامل" class="form-control" required>
        <input type="email" name="email" placeholder="البريد الإلكتروني" class="form-control" required>
        <input type="password" name="password" placeholder="كلمة المرور" class="form-control" required>
        <input type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور" class="form-control" required>
        <button type="submit" class="btn-primary">تسجيل</button>
    </form>
    <a href="{{ route('login') }}" class="login-link">لديك حساب؟ سجل الدخول</a>
</div>

@endsection
