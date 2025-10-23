<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - My Website</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="font-family: Arial; background-color: #f8f9fa; text-align:center; padding:50px;">
    <h1>Selamat Datang di My Website!</h1>
    <p>Ini adalah landing page pertama kamu di Laravel 🎉</p>
    <a href="{{ url('/admin/dashboard') }}">Masuk ke Dashboard</a>
</body>
</html>
