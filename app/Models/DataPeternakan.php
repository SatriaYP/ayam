<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPeternakan extends Model
{
    protected $table = 'data_peternakan';
    protected $fillable = ['nama_peternakan', 'kapasitas', 'alamat', 'no_telp', 'id_user'];
    public $timestamps = false;
}
