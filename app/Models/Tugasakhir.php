<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugasakhir extends Model
{
    // use HasFactory;
    protected $table = 'tugasakhir';
    protected $primaryKey = 'id';
    protected $fillable = ['mhs_nim', 'lokasi', 'upload_file'];

    public function mahasiswa(){
    return $this->belongsTo(Mahasiswa::class, 'mhs_nim');
    }
}
