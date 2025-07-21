<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang | Sistem Pengelolaan Proyek TI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Segoe UI', sans-serif;
        }
        .hero {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/bg_dashboard.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 20px;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.25rem;
        }
        .section {
            padding: 60px 20px;
            text-align: center;
        }
        .btn-primary {
            background-color: #3b82f6;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
        }
        .btn-primary:hover {
            background-color: #2563eb;
        }
        footer {
            background-color: #111827;
            color: #ccc;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <header class="hero">
        <h1>Sistem Informasi Pengelolaan Proyek TI</h1>
        <p>Platform Analitik & Manajemen Proyek berbasis Laravel dan Data Warehouse</p>
        <a href="{{ route('login') }}" class="btn-primary mt-4 inline-block">Masuk Dashboard</a>
    </header>

    <section class="section bg-white">
        <h2 class="text-2xl font-bold mb-4">Fitur Unggulan</h2>
        <p class="mb-4">Sistem ini membantu Anda memantau progres proyek, mengelola tim, serta mengevaluasi anggaran secara real-time melalui visualisasi interaktif.</p>
        <div class="grid md:grid-cols-3 gap-8 mt-8 max-w-5xl mx-auto">
            <div>
                <h3 class="text-xl font-semibold mb-2">Dashboard Interaktif</h3>
                <p>Menampilkan statistik proyek, visualisasi status tugas, dan distribusi anggaran langsung dari data operasional.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-2">Integrasi Laravel</h3>
                <p>Menggabungkan kekuatan Laravel Filament</p>
            </div>
        </div>
    </section>

    <section class="section bg-gray-100">
        <h2 class="text-2xl font-bold mb-4">Tim Pengembang</h2>
        <p></p>
        <ul class="mt-4 space-y-2">
            <li>Muhammad Virga Mulia </li>
        </ul>
    </section>

    <footer>
        &copy; {{ date('Y') }} Sistem Pengelolaan Proyek TI - Laravel 
    </footer>

</body>
</html>