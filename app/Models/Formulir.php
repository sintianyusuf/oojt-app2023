<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    // use HasFactory;
    protected $table = 'formulir';
    protected $primaryKey = 'id_formulir';
    protected $fillable = [ 'nama_lengkap', 'nim' ,'semester' ,
                            'jenis_kelamin' ,'tempat_lahir','tanggal_lahir' ,
                             'agama','alamat','no_hp','ukuran_baju','slip_pembayaran',
                            'transkip_nilai' ,'ktm' ,'pas_photo' ,];
}
