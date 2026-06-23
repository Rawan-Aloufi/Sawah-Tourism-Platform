@extends('layouts.app')

@section('content')

<style>
    .unauthorized-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 60vh;
        text-align: center;
        padding: 20px;
        color: #449f95;
    }

    .unauthorized-container h1 {
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .unauthorized-container p {
        font-size: 1.3rem;
        margin-bottom: 30px;
        color: #6c757d;
    }

    .btn-home {
        background-color: #449f95;
        border-color: #449f95;
        color: white;
        padding: 12px 25px;
        font-size: 1.1rem;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-home:hover {
        background-color: #357c75;
        border-color: #357c75;
        color: white;
        text-decoration: none;
    }
</style>

<div class="unauthorized-container">
    <h1>عذرًا، الوصول غير مصرح به</h1>
    <p>ليس لديك صلاحية الدخول إلى هذه الصفحة أو إجراء هذا الإجراء.</p>
    <a href="{{ url('/') }}" class="btn-home">العودة إلى الصفحة الرئيسية</a>
</div>

@endsection
