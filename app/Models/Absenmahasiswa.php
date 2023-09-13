<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absenmahasiswa extends Model
{
    // use HasFactory;
    protected $table = 'absenmhs';
    protected $primaryKey = 'id_absenmhs';
    protected $fillable = ['mhs_nim', 'tanggal',
                               'gambar'];
    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'mahs_nim');
    }
}
