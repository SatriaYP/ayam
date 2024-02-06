<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilPanen extends Model
{
    protected $table = 'hasil_panen';
    protected $fillable = ['tanggal', 'jumlah_ayam', 'bobot_ayam', 'id_peternakan', 'id_sopir'];
    public $timestamps = false;

    public function peternakan()
    {
        return $this->belongsTo(DataPeternakan::class, 'id_peternakan');
    }

    public function sopir()
    {
        return $this->belongsTo(DataSopir::class, 'id_sopir');
    }
}
