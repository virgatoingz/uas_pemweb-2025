<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;

    protected $table = 'proyek';

    protected $fillable = [
        'nama_proyek',
        'klien',
        'tanggal_mulai',
        'deadline',
        'anggaran',
        'status',
    ];

    // Relasi ke Tugas
    public function tugas()
    {
        return $this->hasMany(Tugas::class);
    }
}
