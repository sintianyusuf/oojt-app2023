<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    // use HasFactory;
    protected $table = 'tb_agama';
    protected $primaryKey = 'agama_id';
    public $timestamps = ['nama_agama'];


    public function mahasiswa() {
        return $this->hasOne(Mahasiswa::class );
}

}
