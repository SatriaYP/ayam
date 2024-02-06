<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManajemenObat extends Model
{
    protected $table = 'manajemen_obat';
    protected $fillable = ['tanggal_masuk', 'stok', 'id_obat'];
    public $timestamps = false;

    public function obat()
    {
        return $this->belongsTo(DataObat::class, 'id_obat');
    }
}
