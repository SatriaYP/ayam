<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataObat extends Model
{
    protected $table = 'data_obat';
    protected $fillable = ['nama_obat', 'jenis_obat', 'deskripsi', 'fungsi'];
    public $timestamps = false;
}
