<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard Admin')</title>

    {{-- Load CSS & JS dari Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Tombol Sidebar -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Beranda</a>
            </li>
        </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Logo -->
        <a href="#" class="brand-link">
            <img src="{{ asset('images/logo.png') }}" alt="Logo"
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8; width: 35px; height: 35px;">
            <span class="brand-text font-weight-light">Dilesin Admin</span>
        </a>

        <!-- Menu Sidebar -->
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="{{ url('/admin/dashboard') }}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('students.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Data Siswa</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Konten Halaman -->
    <div class="content-wrapper p-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="main-footer text-center">
        <strong>&copy; 2025 Dilesin Admin.</strong> All rights reserved.
    </footer>

</div>
</body>
</html>
