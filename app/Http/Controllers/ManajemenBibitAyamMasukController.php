<?php

namespace App\Http\Controllers;

use App\Models\ManajemenBibitAyamMasuk;
use App\Models\DataPeternakan;
use Illuminate\Http\Request;

class ManajemenBibitAyamMasukController extends Controller
{
    public function index()
    {
        $data = ManajemenBibitAyamMasuk::with('peternakan')->get();
        $type_menu = "Manajemen Bibit Ayam Masuk";
        return view('manajemenbibitayammasuk.index', compact('type_menu', 'data'));
    }

    public function create()
    {
        $peternakan = DataPeternakan::all();
        $type_menu = "Manajemen Bibit Ayam Masuk";
        return view('manajemenbibitayammasuk.create', compact('type_menu', 'peternakan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'jumlah_bibit' => 'required',
            'id_peternakan' => 'required',
        ]);

        ManajemenBibitAyamMasuk::create($request->all());

        return redirect()->route('manajemenbibitayammasuk.index')->with('success', 'Data added successfully!');
    }

    public function edit($id)
    {
        $data = ManajemenBibitAyamMasuk::with('peternakan')->findOrFail($id);
        $peternakan = DataPeternakan::all();
        $type_menu = "Manajemen Bibit Ayam Masuk";
        return view('manajemenbibitayammasuk.edit', compact('type_menu', 'data', 'peternakan'));
    }

    public function update(Request $request, $id)
    {
        $data = ManajemenBibitAyamMasuk::findOrFail($id);

        $request->validate([
            'tanggal' => 'required',
            'jumlah_bibit' => 'required',
            'id_peternakan' => 'required',
        ]);

        $data->update($request->all());

        return redirect()->route('manajemenbibitayammasuk.index')->with('success', 'Data updated successfully!');
    }

    public function destroy($id)
    {
        $data = ManajemenBibitAyamMasuk::findOrFail($id);
        $data->delete();

        return redirect()->route('manajemenbibitayammasuk.index')->with('success', 'Data deleted successfully!');
    }
}
