<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai1 extends Model
{
    // use HasFactory;
    protected $table = 'nilai1';
    protected $primaryKey = 'id_nilai1';
    protected $fillable = ['nama_mahasiswa', 'nk1',
                            'nk2', 'nk3', 'nk4',
                            'nk5', 'jumlah', 'ip'];
}
