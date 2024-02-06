<?php

namespace App\Http\Controllers;

use App\Models\HasilPanen;
use Illuminate\Http\Request;

class HasilPanenController extends Controller
{
    public function index()
    {
        $data = HasilPanen::with(['peternakan', 'sopir'])->get();
        $type_menu = "Hasil Panen";
        return view('hasil_panen.index', compact('type_menu', 'data'));
    }
}
