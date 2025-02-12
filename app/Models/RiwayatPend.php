<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPend extends Model
{
    use HasFactory;
    protected $table = 'riwayat_pendidikan';

    protected $fillable = [
        'nama_dosen',
        'nama_pt',
        'prodi',
        'gelar',
        'thn_lulus',
        'bukti_ijazah',
    ];
}
