<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai2 extends Model
{
    // use HasFactory;
    protected $table = 'nilai2';
    protected $primaryKey = 'id_nilai2';
    protected $fillable = ['nim', 'nama_mahasiswa',
                            'skil_input', 'presentasi_kehadiran',
                            'nilai_p1', 'nilai_p2', 'data_input',
                            'pekerjaan', 'total_nilai', 'ket'];
}
