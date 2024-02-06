<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $fillable = ['kode', 'password', 'nama', 'email', 'no_telp'];
    public $timestamps = false;
}
