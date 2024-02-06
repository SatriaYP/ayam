<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\DataArtikel;
use App\Models\ManajemenPakan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'totalUsers' => User::count(),
            'totalArticles' => DataArtikel::count(),
            'totalPakan' => ManajemenPakan::sum('stok'),
        ];
        $type_menu = "dashboard";
        return view('dashboard.index', compact('type_menu', 'data'));
    }
}
