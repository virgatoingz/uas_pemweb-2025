<?php

namespace App\OpenApi\Schemas;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *   schema="Tugas",
 *   title="Skema Tugas",
 *   description="Representasi entitas tugas dalam proyek",
 *   required={"nama_tugas", "proyek_id"},
 *   @OA\Property(property="id", type="integer", readOnly=true),
 *   @OA\Property(property="proyek_id", type="integer", description="ID proyek terkait"),
 *   @OA\Property(property="nama_tugas", type="string", example="Membuat backend"),
 *   @OA\Property(property="deskripsi", type="string", nullable=true),
 *   @OA\Property(property="penanggung_jawab", type="string", nullable=true),
 *   @OA\Property(property="status", type="string", example="belum_mulai"),
 *   @OA\Property(property="tanggal_mulai", type="string", format="date", nullable=true),
 *   @OA\Property(property="deadline", type="string", format="date", nullable=true),
 *   @OA\Property(property="created_at", type="string", format="date-time", readOnly=true),
 *   @OA\Property(property="updated_at", type="string", format="date-time", readOnly=true)
 * )
 */
class Tugas {}
