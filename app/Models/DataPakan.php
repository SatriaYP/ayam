<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPakan extends Model
{
    protected $table = 'data_pakan';
    protected $fillable = ['nama_pakan', 'jenis_pakan', 'deskripsi'];
    public $timestamps = false;
}
