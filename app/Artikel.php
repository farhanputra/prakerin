<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    Protected $table = 'artikels';
    Protected $fillable=['judul','konten','foto'];
    public $timestamps = true;
}
