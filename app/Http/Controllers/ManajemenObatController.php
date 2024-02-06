<?php

namespace App\Http\Controllers;

use App\Models\ManajemenObat;
use App\Models\DataObat;
use Illuminate\Http\Request;

class ManajemenObatController extends Controller
{
    public function index()
    {
        $data = ManajemenObat::with('obat')->get();
        $type_menu = "Manajemen Obat";
        return view('manajemenobat.index', compact('type_menu', 'data'));
    }

    public function create()
    {
        $obat = DataObat::all();
        $type_menu = "Manajemen Obat";
        return view('manajemenobat.create', compact('type_menu', 'obat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_masuk' => 'required',
            'stok' => 'required',
            'id_obat' => 'required',
        ]);

        ManajemenObat::create($request->all());

        return redirect()->route('manajemenobat.index')->with('success', 'Data added successfully!');
    }

    public function edit($id)
    {
        $data = ManajemenObat::with('obat')->findOrFail($id);
        $obat = DataObat::all();
        $type_menu = "Manajemen Obat";
        return view('manajemenobat.edit', compact('type_menu', 'data', 'obat'));
    }

    public function update(Request $request, $id)
    {
        $data = ManajemenObat::findOrFail($id);

        $request->validate([
            'tanggal_masuk' => 'required',
            'stok' => 'required',
            'id_obat' => 'required',
        ]);

        $data->update($request->all());

        return redirect()->route('manajemenobat.index')->with('success', 'Data updated successfully!');
    }

    public function destroy($id)
    {
        $data = ManajemenObat::findOrFail($id);
        $data->delete();

        return redirect()->route('manajemenobat.index')->with('success', 'Data deleted successfully!');
    }
}
