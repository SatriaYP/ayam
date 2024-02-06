<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class ManajemenBibitAyamMasuk extends Model
{
    protected $table = 'manajemen_bibit_ayam_masuk';
    protected $fillable = ['tanggal', 'jumlah_bibit', 'id_peternakan'];
    public $timestamps = false;

    public function peternakan()
    {
        return $this->belongsTo(DataPeternakan::class, 'id_peternakan');
    }
}
