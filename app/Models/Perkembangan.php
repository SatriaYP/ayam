<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Perkembangan extends Model
{
    protected $table = 'perkembangan';
    protected $fillable = ['tanggal', 'minggu_ke', 'pakan_pakai', 'pakan_sisa', 'bobot', 'afkir', 'kematian', 'id_peternakan'];
    public $timestamps = false;

    public function peternakan()
    {
        return $this->belongsTo(DataPeternakan::class, 'id_peternakan');
    }
}
