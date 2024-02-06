<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataSopir extends Model
{
    protected $table = 'data_sopir';
    protected $fillable = ['nama_sopir', 'nopol', 'no_telp', 'status'];
    public $timestamps = false;
}
