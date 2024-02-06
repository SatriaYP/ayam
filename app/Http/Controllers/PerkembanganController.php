<?php

namespace App\Http\Controllers;

use App\Models\Perkembangan;
use Illuminate\Http\Request;

class PerkembanganController extends Controller
{
    public function index()
    {
        $data = Perkembangan::with('peternakan')->get();
        $type_menu = "Perkembangan";
        return view('perkembangan.index', compact('type_menu', 'data'));
    }
}
