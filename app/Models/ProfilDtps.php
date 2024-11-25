<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilDtps extends Model
{
    use HasFactory;

    protected $table = 'profil_dtps';
    protected $fillable = [
        'nama_dosen',
        'nidn',
        'tanggal_lahir',
        'bukti_sertifikasi',
    ];
}
