<?php

namespace App\Http\Controllers;

use App\Models\DataObat;
use Illuminate\Http\Request;

class DataObatController extends Controller
{
    public function index()
    {
        $data = DataObat::all();
        $type_menu = "Data Master";
        return view('data_obat.index', compact('type_menu', 'data'));
    }

    public function create()
    {
        $type_menu = "Data Master";
        return view('data_obat.create', compact('type_menu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'deskripsi' => 'required',
            'fungsi' => 'required',
        ]);

        DataObat::create($request->all());

        return redirect()->route('data_obat.index')->with('success', 'Data Obat added successfully!');
    }

    public function edit($id)
    {
        $dataObat = DataObat::findOrFail($id);
        $type_menu = "Data Master";
        return view('data_obat.edit', compact('type_menu', 'dataObat'));
    }

    public function update(Request $request, $id)
    {
        $dataObat = DataObat::findOrFail($id);
        $dataObat->update($request->all());

        return redirect()->route('data_obat.index')->with('success', 'Data Obat updated successfully!');
    }

    public function destroy($id)
    {
        $dataObat = DataObat::findOrFail($id);
        $dataObat->delete();

        return redirect()->route('data_obat.index')->with('success', 'Data Obat deleted successfully!');
    }
}
