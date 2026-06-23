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

    .reset-password-container {
        max-width: 400px;
        margin: 60px auto;
        background: white;
        padding: 30px 25px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        text-align: center;
    }

    .reset-password-container h2 {
        color: var(--primary-color);
        margin-bottom: 25px;
    }

    .form-control {
        border: 1.5px solid var(--secondary-color);
        border-radius: 6px;
        padding: 10px 12px;
        font-size: 1rem;
        margin-bottom: 20px;
        width: 100%;
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

    .text-muted {
        color: var(--secondary-color);
        margin-bottom: 15px;
    }
</style>

<div class="reset-password-container">
    <h2>إعادة تعيين كلمة المرور</h2>
    <p class="text-muted">يرجى إدخال كلمة المرور الجديدة وتأكيدها.</p>

    <form method="POST" action="#">
        @csrf

        <!-- عادة يُرسل رمز التحقق (token) مع الرابط، يجب تضمينه هنا -->
        <input type="hidden" name="token" value="{{ $token ?? '' }}">

        <input type="email" name="email" placeholder="البريد الإلكتروني" class="form-control" required autofocus>
        <input type="password" name="password" placeholder="كلمة المرور الجديدة" class="form-control" required>
        <input type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور الجديدة" class="form-control" required>

        <button type="submit" class="btn-primary">تعيين كلمة المرور</button>
    </form>
</div>

@endsection
