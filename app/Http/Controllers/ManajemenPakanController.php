<?php

namespace App\Http\Controllers;

use App\Models\ManajemenPakan;
use App\Models\DataPakan;
use Illuminate\Http\Request;

class ManajemenPakanController extends Controller
{
    public function index()
    {
        $data = ManajemenPakan::with('pakan')->get();
        $type_menu = "Manajemen Pakan";
        return view('manajemenpakan.index', compact('type_menu', 'data'));
    }

    public function create()
    {
        $pakan = DataPakan::all();
        $type_menu = "Manajemen Pakan";
        return view('manajemenpakan.create', compact('type_menu', 'pakan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_masuk' => 'required',
            'stok' => 'required',
            'id_pakan' => 'required',
        ]);

        ManajemenPakan::create($request->all());

        return redirect()->route('manajemenpakan.index')->with('success', 'Data added successfully!');
    }

    public function edit($id)
    {
        $data = ManajemenPakan::with('pakan')->findOrFail($id);
        $pakan = DataPakan::all();
        $type_menu = "Manajemen Pakan";
        return view('manajemenpakan.edit', compact('type_menu', 'data', 'pakan'));
    }

    public function update(Request $request, $id)
    {
        $data = ManajemenPakan::findOrFail($id);

        $request->validate([
            'tanggal_masuk' => 'required',
            'stok' => 'required',
            'id_pakan' => 'required',
        ]);

        $data->update($request->all());

        return redirect()->route('manajemenpakan.index')->with('success', 'Data updated successfully!');
    }

    public function destroy($id)
    {
        $data = ManajemenPakan::findOrFail($id);
        $data->delete();

        return redirect()->route('manajemenpakan.index')->with('success', 'Data deleted successfully!');
    }
}
