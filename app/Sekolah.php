<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
     protected $table = 'sekolahs';
    Protected $fillable=['siswa','guru','wali_kelas','kepala_sekolah'];
    public $timestamps = true;
}
