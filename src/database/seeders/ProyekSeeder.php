<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyek;

class ProyekSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama_proyek' => 'Sistem Informasi Akademik',
                'klien' => 'Universitas Esa Unggul',
                'tanggal_mulai' => '2024-01-10',
                'deadline' => '2024-06-30',
                'anggaran' => 150000000,
                'status' => 'berjalan',
            ],
            [
                'nama_proyek' => 'Aplikasi Inventory Gudang',
                'klien' => 'PT. Gudang Makmur',
                'tanggal_mulai' => '2024-03-01',
                'deadline' => '2024-07-15',
                'anggaran' => 75000000,
                'status' => 'berjalan',
            ],
            [
                'nama_proyek' => 'E-Commerce Fashion',
                'klien' => 'Toko Baju Murah',
                'tanggal_mulai' => '2023-09-01',
                'deadline' => '2024-02-15',
                'anggaran' => 120000000,
                'status' => 'selesai',
            ],
            [
                'nama_proyek' => 'Sistem Booking Hotel',
                'klien' => 'Hotel Asri',
                'tanggal_mulai' => '2024-04-01',
                'deadline' => '2024-09-30',
                'anggaran' => 95000000,
                'status' => 'berjalan',
            ],
            [
                'nama_proyek' => 'Aplikasi Monitoring Proyek',
                'klien' => 'PT. Proyek Kita',
                'tanggal_mulai' => '2023-11-01',
                'deadline' => '2024-04-30',
                'anggaran' => 85000000,
                'status' => 'selesai',
            ],
            [
                'nama_proyek' => 'Website Company Profile',
                'klien' => 'CV. Karya Mandiri',
                'tanggal_mulai' => '2024-01-20',
                'deadline' => '2024-03-15',
                'anggaran' => 25000000,
                'status' => 'selesai',
            ],
            [
                'nama_proyek' => 'Aplikasi POS Toko Retail',
                'klien' => 'MiniMart ABC',
                'tanggal_mulai' => '2024-05-01',
                'deadline' => '2024-09-15',
                'anggaran' => 55000000,
                'status' => 'berjalan',
            ],
            [
                'nama_proyek' => 'Dashboard Keuangan Internal',
                'klien' => 'PT. Keuangan Sejahtera',
                'tanggal_mulai' => '2023-12-01',
                'deadline' => '2024-05-15',
                'anggaran' => 68000000,
                'status' => 'selesai',
            ],
            [
                'nama_proyek' => 'Aplikasi Koperasi Simpan Pinjam',
                'klien' => 'Koperasi Maju',
                'tanggal_mulai' => '2024-02-10',
                'deadline' => '2024-07-10',
                'anggaran' => 90000000,
                'status' => 'berjalan',
            ],
            [
                'nama_proyek' => 'Sistem Manajemen Karyawan',
                'klien' => 'PT. HR Indonesia',
                'tanggal_mulai' => '2023-10-05',
                'deadline' => '2024-01-31',
                'anggaran' => 105000000,
                'status' => 'selesai',
            ],
            [
                'nama_proyek' => 'Aplikasi Kasir Cloud',
                'klien' => 'Cafe Kopi Kita',
                'tanggal_mulai' => '2024-05-15',
                'deadline' => '2024-08-31',
                'anggaran' => 40000000,
                'status' => 'berjalan',
            ],
            [
                'nama_proyek' => 'Sistem Survey Online',
                'klien' => 'Lembaga Riset Nusantara',
                'tanggal_mulai' => '2024-03-20',
                'deadline' => '2024-06-30',
                'anggaran' => 60000000,
                'status' => 'berjalan',
            ],
            [
                'nama_proyek' => 'Aplikasi Pendaftaran Sekolah',
                'klien' => 'SMK Prestasi',
                'tanggal_mulai' => '2024-02-01',
                'deadline' => '2024-06-01',
                'anggaran' => 72000000,
                'status' => 'berjalan',
            ],
            [
                'nama_proyek' => 'Aplikasi Tracking Pengiriman',
                'klien' => 'Ekspedisi Kilat',
                'tanggal_mulai' => '2024-04-10',
                'deadline' => '2024-09-01',
                'anggaran' => 85000000,
                'status' => 'tertunda',
            ],
            [
                'nama_proyek' => 'Platform Kelas Online',
                'klien' => 'EduTech Indonesia',
                'tanggal_mulai' => '2023-11-15',
                'deadline' => '2024-03-30',
                'anggaran' => 135000000,
                'status' => 'selesai',
            ],
        ];

        foreach ($data as $proyek) {
            Proyek::create($proyek);
        }
    }
}
