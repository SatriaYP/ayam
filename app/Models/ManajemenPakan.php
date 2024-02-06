<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManajemenPakan extends Model
{
    protected $table = 'manajemen_pakan';
    protected $fillable = ['tanggal_masuk', 'stok', 'id_pakan'];
    public $timestamps = false;

    public function pakan()
    {
        return $this->belongsTo(DataPakan::class, 'id_pakan');
    }
}
