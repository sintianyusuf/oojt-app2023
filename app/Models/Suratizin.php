<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratizin extends Model
{
    // use HasFactory;
    protected $table = 'suratizin';
    protected $primaryKey = 'id_suratizin';
    protected $fillable = ['mhs_nim','tanggal','status','durasi'];


    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'mhs_nim');
    }
}
