<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // use HasFactory;
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $fillable = ['nama_mahasiswa', 'semester',
                            'jenis_kelamin', 'tempat_lahir',
                             'tanggal_lahir','agama',
                            'alamat','no_hp',
                            'ukuran_baju','slip_pembayaran',
                            'transkip', 'ktm',
                            'pas_photo','user_id', 'agama_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function abseninstansi() {
        return $this->hasOne(AbsenInstansi::class);
    }

    public function agama() {
        return $this->belongsTo(Agama::class, 'agama_id');
    }

    public function suratizin() {
        return $this->hasOne(Suratizin::class);
    }

}
