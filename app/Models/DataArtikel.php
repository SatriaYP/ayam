<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataArtikel extends Model
{
    protected $table = 'data_artikel';
    protected $fillable = ['judul', 'kategori', 'deskripsi'];
    public $timestamps = false;
}
