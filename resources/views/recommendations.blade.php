@extends('layouts.app')

@section('content')

<style>
    /* ألوان المشروع */
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

    .review-form {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 8px rgba(0,0,0,0.1);
        max-width: 600px;
        margin: 20px auto;
    }

    .review-form h2 {
        color: var(--primary-color);
        margin-bottom: 20px;
    }

    .review-form textarea {
        resize: vertical;
    }

    .btn-primary {
        background-color: var(--primary-color) !important;
        border-color: var(--primary-color) !important;
        color: white !important;
    }

    .reviews-section {
        max-width: 900px;
        margin: 40px auto;
    }

    .review-card {
        background: white;
        padding: 15px 20px;
        border-radius: 8px;
        box-shadow: 0 0 5px rgba(0,0,0,0.1);
        margin-bottom: 15px;
        position: relative;
    }

    .review-card h5 {
        margin-bottom: 5px;
        color: var(--primary-color);
    }

    .review-card .rating {
        color: #ffc107; /* لون النجوم */
        font-size: 1.1rem;
        margin-bottom: 8px;
    }

    .review-card .review-text {
        margin-bottom: 10px;
    }

    .like-btn {
        position: absolute;
        top: 15px;
        right: 20px;
        background: transparent;
        border: none;
        color: var(--secondary-color);
        cursor: pointer;
        font-size: 1.3rem;
        transition: color 0.3s ease;
    }

    .like-btn.liked {
        color: var(--primary-color);
    }

    .location-title {
        margin-top: 40px;
        margin-bottom: 20px;
        color: var(--primary-color);
        border-bottom: 2px solid var(--primary-color);
        padding-bottom: 5px;
        font-weight: bold;
        font-size: 1.3rem;
    }
</style>

<div class="review-form">
    <h2 style="color: #404e55;">أضف تقييمك أو توصيتك</h2>
    <form action="#" method="POST">
        @csrf
        <div class="mb-3">
            <label for="location" class="form-label">اختر المكان</label>
            <select id="location" name="location" class="form-select" required>
                <option value="">-- اختر --</option>
                <option value="الرياض">الرياض</option>
                <option value="جدة">جدة</option>
                <option value="العلا">العلا</option>
                <option value="أبها">أبها</option>
                <!-- أضيفي أماكن أخرى حسب الحاجة -->
            </select>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">التقييم</label>
            <select id="rating" name="rating" class="form-select" required>
                <option value="">-- اختر --</option>
                <option value="5">★★★★★ ممتاز</option>
                <option value="4">★★★★ جيد جداً</option>
                <option value="3">★★★ جيد</option>
                <option value="2">★★ متوسط</option>
                <option value="1">★ ضعيف</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="review" class="form-label">توصيتك أو ملاحظاتك</label>
            <textarea id="review" name="review" class="form-control" rows="4" placeholder="اكتب رأيك هنا..." required></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">إرسال التقييم</button>
    </form>
</div>

<script>
    // جافاسكربت صغير لتغيير لون زر اللايك عند الضغط
    document.querySelectorAll('.like-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            btn.classList.toggle('liked');
        });
    });
</script>

@endsection
