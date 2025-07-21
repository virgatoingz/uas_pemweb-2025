<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'tugas';

    protected $fillable = [
        'proyek_id',
        'nama_tugas',
        'kategori',
        'tingkat_kesulitan',
        'status',
        'tanggal_mulai',
        'tanggal_selesai',
        'biaya_dikeluarkan',
        'user_id',
    ];

    // Relasi ke Proyek
    public function proyek()
    {
        return $this->belongsTo(Proyek::class);
    }

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
