<!-- resources/views/admin/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <p>Bu yerda adminlar maqolalarni tasdiqlash, foydalanuvchilarni boshqarish kabi funksiyalarni bajarishi mumkin.</p>

    <!-- Admin uchun linklar va bo‘limlar -->
    <a href="{{ route('admin.pendingArticles') }}">Maqolalarni boshqarish</a>
    <!-- Qo‘shimcha bo‘limlar qo‘shishingiz mumkin -->
</body>
</html>
