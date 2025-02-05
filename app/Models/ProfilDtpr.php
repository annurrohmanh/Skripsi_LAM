<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilDtpr extends Model
{
    use HasFactory;

    protected $table = 'profil_dtpr';
    protected $fillable = [
        'nama_dosen_dtpr',
        'nidn',
        'tanggal_lahir',
        'bukti_sertifikasi',
    ];
}
