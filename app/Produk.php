<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
      protected $fillable =  ['nama_produk','harga'];
    public $timestamps = true;

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($tag) {
            // mengecek apakah penulis masih punya buku
            if ($tag->artikel->count() > 0) {
                // menyiapkan pesan eror
                $html = 'tag tidak bisa dihapus karena masih digunakan oleh Artikel: ';
                $html .= '<ul>';
                foreach ($tag->artikel as $data) {
                    $html .= "<li>$data->judul</li>";
                }
                $html .= '</ul>';
                Session::flash("flash_notification", [
                    "level" => "danger",
                    "message" => $html
                ]);
                // membatalkan proses penghapusan
                return false;
            }
        });
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
