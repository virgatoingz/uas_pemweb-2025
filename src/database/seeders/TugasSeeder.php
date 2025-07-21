<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tugas;

class TugasSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['proyek_id' => 1, 'user_id' => 2, 'nama_tugas' => 'Pengembangan Modul Mahasiswa', 'kategori' => 'Coding', 'tingkat_kesulitan' => 'tinggi', 'status' => 'proses', 'tanggal_mulai' => '2024-01-15 09:00:00', 'tanggal_selesai' => null, 'biaya_dikeluarkan' => 5000000],
            ['proyek_id' => 1, 'user_id' => 3, 'nama_tugas' => 'Pengujian Sistem Akademik', 'kategori' => 'Testing', 'tingkat_kesulitan' => 'sedang', 'status' => 'tertunda', 'tanggal_mulai' => '2024-02-01 10:00:00', 'tanggal_selesai' => null, 'biaya_dikeluarkan' => 2500000],
            ['proyek_id' => 2, 'user_id' => 2, 'nama_tugas' => 'Desain Database Inventory', 'kategori' => 'Desain', 'tingkat_kesulitan' => 'rendah', 'status' => 'selesai', 'tanggal_mulai' => '2024-03-02 08:00:00', 'tanggal_selesai' => '2024-03-04 18:00:00', 'biaya_dikeluarkan' => 3000000],
            ['proyek_id' => 3, 'user_id' => 4, 'nama_tugas' => 'Integrasi API Pembayaran', 'kategori' => 'Integrasi', 'tingkat_kesulitan' => 'tinggi', 'status' => 'selesai', 'tanggal_mulai' => '2023-11-10 09:00:00', 'tanggal_selesai' => '2023-11-20 17:00:00', 'biaya_dikeluarkan' => 8000000],
            ['proyek_id' => 4, 'user_id' => 5, 'nama_tugas' => 'Desain UI Booking App', 'kategori' => 'Desain', 'tingkat_kesulitan' => 'sedang', 'status' => 'proses', 'tanggal_mulai' => '2024-04-05 13:00:00', 'tanggal_selesai' => null, 'biaya_dikeluarkan' => 4000000],
            ['proyek_id' => 5, 'user_id' => 6, 'nama_tugas' => 'Setup Server UAT', 'kategori' => 'DevOps', 'tingkat_kesulitan' => 'rendah', 'status' => 'selesai', 'tanggal_mulai' => '2023-12-20 14:00:00', 'tanggal_selesai' => '2023-12-21 16:00:00', 'biaya_dikeluarkan' => 2000000],
            ['proyek_id' => 6, 'user_id' => 2, 'nama_tugas' => 'Coding Halaman Kontak', 'kategori' => 'Coding', 'tingkat_kesulitan' => 'rendah', 'status' => 'selesai', 'tanggal_mulai' => '2024-01-25 10:00:00', 'tanggal_selesai' => '2024-01-26 12:00:00', 'biaya_dikeluarkan' => 1500000],
            ['proyek_id' => 7, 'user_id' => 3, 'nama_tugas' => 'Uji Sistem POS', 'kategori' => 'Testing', 'tingkat_kesulitan' => 'sedang', 'status' => 'proses', 'tanggal_mulai' => '2024-05-03 09:00:00', 'tanggal_selesai' => null, 'biaya_dikeluarkan' => 3000000],
            ['proyek_id' => 8, 'user_id' => 4, 'nama_tugas' => 'Export Data Keuangan', 'kategori' => 'Data', 'tingkat_kesulitan' => 'rendah', 'status' => 'selesai', 'tanggal_mulai' => '2024-02-10 11:00:00', 'tanggal_selesai' => '2024-02-10 15:00:00', 'biaya_dikeluarkan' => 1000000],
            ['proyek_id' => 9, 'user_id' => 5, 'nama_tugas' => 'Sosialisasi ke User', 'kategori' => 'Training', 'tingkat_kesulitan' => 'rendah', 'status' => 'selesai', 'tanggal_mulai' => '2024-03-10 09:00:00', 'tanggal_selesai' => '2024-03-11 17:00:00', 'biaya_dikeluarkan' => 2000000],
            ['proyek_id' => 10, 'user_id' => 6, 'nama_tugas' => 'Buat Login Karyawan', 'kategori' => 'Coding', 'tingkat_kesulitan' => 'sedang', 'status' => 'selesai', 'tanggal_mulai' => '2023-11-01 08:00:00', 'tanggal_selesai' => '2023-11-02 17:00:00', 'biaya_dikeluarkan' => 2500000],
            ['proyek_id' => 11, 'user_id' => 2, 'nama_tugas' => 'Integrasi QR Pembayaran', 'kategori' => 'Integrasi', 'tingkat_kesulitan' => 'tinggi', 'status' => 'tertunda', 'tanggal_mulai' => '2024-05-15 10:00:00', 'tanggal_selesai' => null, 'biaya_dikeluarkan' => 0],
            ['proyek_id' => 12, 'user_id' => 3, 'nama_tugas' => 'Pengujian Responsivitas', 'kategori' => 'Testing', 'tingkat_kesulitan' => 'sedang', 'status' => 'proses', 'tanggal_mulai' => '2024-03-25 14:00:00', 'tanggal_selesai' => null, 'biaya_dikeluarkan' => 1200000],
            ['proyek_id' => 13, 'user_id' => 4, 'nama_tugas' => 'Formulir Pendaftaran Siswa', 'kategori' => 'Desain', 'tingkat_kesulitan' => 'rendah', 'status' => 'selesai', 'tanggal_mulai' => '2024-02-05 09:00:00', 'tanggal_selesai' => '2024-02-07 18:00:00', 'biaya_dikeluarkan' => 1700000],
            ['proyek_id' => 14, 'user_id' => 5, 'nama_tugas' => 'Pengiriman Push Notification', 'kategori' => 'Integrasi', 'tingkat_kesulitan' => 'tinggi', 'status' => 'proses', 'tanggal_mulai' => '2024-04-15 10:00:00', 'tanggal_selesai' => null, 'biaya_dikeluarkan' => 4300000],
            ['proyek_id' => 15, 'user_id' => 6, 'nama_tugas' => 'Uji Bandwidth Video', 'kategori' => 'Testing', 'tingkat_kesulitan' => 'sedang', 'status' => 'selesai', 'tanggal_mulai' => '2024-01-10 08:00:00', 'tanggal_selesai' => '2024-01-12 17:00:00', 'biaya_dikeluarkan' => 3200000],
            ['proyek_id' => 3, 'user_id' => 2, 'nama_tugas' => 'Analisis UX Checkout', 'kategori' => 'Analisis', 'tingkat_kesulitan' => 'sedang', 'status' => 'selesai', 'tanggal_mulai' => '2023-10-20 10:00:00', 'tanggal_selesai' => '2023-10-25 17:00:00', 'biaya_dikeluarkan' => 2200000],
            ['proyek_id' => 7, 'user_id' => 3, 'nama_tugas' => 'Cetak Struk Bluetooth', 'kategori' => 'Integrasi', 'tingkat_kesulitan' => 'tinggi', 'status' => 'proses', 'tanggal_mulai' => '2024-05-10 13:00:00', 'tanggal_selesai' => null, 'biaya_dikeluarkan' => 3700000],
            ['proyek_id' => 5, 'user_id' => 4, 'nama_tugas' => 'Desain Flowchart Sistem', 'kategori' => 'Desain', 'tingkat_kesulitan' => 'rendah', 'status' => 'selesai', 'tanggal_mulai' => '2023-11-20 08:00:00', 'tanggal_selesai' => '2023-11-21 17:00:00', 'biaya_dikeluarkan' => 1800000],
            ['proyek_id' => 6, 'user_id' => 2, 'nama_tugas' => 'Deploy ke Hosting', 'kategori' => 'DevOps', 'tingkat_kesulitan' => 'sedang', 'status' => 'selesai', 'tanggal_mulai' => '2024-02-01 10:00:00', 'tanggal_selesai' => '2024-02-01 14:00:00', 'biaya_dikeluarkan' => 2000000],
        ];

        foreach ($data as $tugas) {
            Tugas::create($tugas);
        }
    }
}
