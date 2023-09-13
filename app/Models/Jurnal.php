<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    // use HasFactory;
    protected $table = 'jurnal';
    protected $primaryKey = 'id_jurnal';
    protected $fillable = ['mhs_nim','hari_tanggal', 'keterangan'];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'mhs_nim');
    }

}
