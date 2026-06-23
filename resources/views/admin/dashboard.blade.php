<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #dc2626;
            color: white;
            padding: 20px;
            margin: -30px -30px 30px -30px;
            border-radius: 8px 8px 0 0;
        }
        .welcome-text {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .user-info {
            opacity: 0.9;
        }
        .actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .action-card {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 6px;
            border-left: 4px solid #dc2626;
        }
        .action-card h3 {
            margin: 0 0 10px 0;
            color: #dc2626;
        }
        .btn {
            background-color: #dc2626;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #b91c1c;
        }
        .logout-btn {
            background-color: #6b7280;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            float: right;
            margin-top: -10px;
        }
        .logout-btn:hover {
            background-color: #4b5563;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="welcome-text">مرحباً بك في لوحة التحكم الإدارية</div>
            <div class="user-info">
                المستخدم: {{ Auth::user()->name }} ({{ Auth::user()->email }})
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="logout-btn" style="border: none; cursor: pointer;">تسجيل الخروج</button>
                </form>
            </div>
        </div>

        <div class="actions">
            <div class="action-card">
                <h3>إدارة المستخدمين</h3>
                <p>عرض وإدارة جميع المستخدمين المسجلين في النظام</p>
                <a href="#" class="btn">إدارة المستخدمين</a>
            </div>

            <div class="action-card">
                <h3>إدارة الطلبات</h3>
                <p>مراجعة ومعالجة طلبات المستخدمين</p>
                <a href="#" class="btn">عرض الطلبات</a>
            </div>

            <div class="action-card">
                <h3>التقارير</h3>
                <p>عرض التقارير والإحصائيات</p>
                <a href="#" class="btn">عرض التقارير</a>
            </div>

            <div class="action-card">
                <h3>الإعدادات</h3>
                <p>تعديل إعدادات النظام العامة</p>
                <a href="#" class="btn">الإعدادات</a>
            </div>
        </div>
    </div>
</body>
</html>
