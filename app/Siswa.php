<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswaa';
    Protected $fillable=['nama','sekolah','alamat','guru','kelas'];
    public $timestamps = true;
}
