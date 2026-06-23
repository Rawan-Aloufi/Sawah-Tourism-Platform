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

    .verify-email-container {
        max-width: 450px;
        margin: 60px auto;
        background: white;
        padding: 30px 25px;
        border-radius: 10px;
        box-shadow: 0 0 12px rgba(0,0,0,0.1);
        text-align: center;
    }

    .verify-email-container h2 {
        color: var(--primary-color);
        margin-bottom: 20px;
    }

    .verify-email-container p {
        color: var(--secondary-color);
        margin-bottom: 30px;
        font-size: 1.1rem;
    }

    .btn-primary {
        background-color: var(--primary-color) !important;
        border-color: var(--primary-color) !important;
        color: white !important;
        padding: 12px 30px;
        font-size: 1.1rem;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-primary:hover {
        background-color: #357c75 !important;
        border-color: #357c75 !important;
        text-decoration: none;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        padding: 12px 20px;
        border-radius: 6px;
        margin-bottom: 20px;
        border: 1px solid #c3e6cb;
        font-weight: 600;
    }
</style>

<div class="verify-email-container">
    <h2>تأكيد البريد الإلكتروني</h2>

    @if(session('status') == 'verification-link-sent')
        <div class="alert-success">
            تم إرسال رابط تأكيد جديد إلى بريدك الإلكتروني.
        </div>
    @endif

    <p>
        يرجى التحقق من بريدك الإلكتروني بالنقر على الرابط الذي أرسلناه لك.
        إذا لم يصلك البريد، يمكنك طلب إعادة إرسال الرابط.
    </p>

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="btn-primary">إعادة إرسال رابط التأكيد</button>
    </form>
</div>

@endsection
