<?php

namespace App\OpenApi\Schemas;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *   schema="Proyek",
 *   title="Skema Proyek",
 *   description="Representasi entitas proyek dalam sistem",
 *   @OA\Property(property="id", type="integer", format="int64", description="ID unik proyek", readOnly=true),
 *   @OA\Property(property="nama_proyek", type="string", description="Nama proyek", example="Sistem Informasi Karyawan"),
 *   @OA\Property(property="klien", type="string", nullable=true, description="Nama klien", example="PT Sukses Makmur"),
 *   @OA\Property(property="tanggal_mulai", type="string", format="date", nullable=true, description="Tanggal mulai", example="2025-08-01"),
 *   @OA\Property(property="deadline", type="string", format="date", nullable=true, description="Tanggal deadline", example="2025-12-15"),
 *   @OA\Property(property="anggaran", type="number", format="float", nullable=true, description="Anggaran proyek", example=125000000.00),
 *   @OA\Property(property="status", type="string", description="Status proyek", example="berjalan"),
 *   @OA\Property(property="created_at", type="string", format="date-time", readOnly=true, description="Waktu pembuatan"),
 *   @OA\Property(property="updated_at", type="string", format="date-time", readOnly=true, description="Waktu update")
 * )
 */
class Proyek {}
