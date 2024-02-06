<?php

namespace App\Http\Controllers;

use App\Models\DataPakan;
use Illuminate\Http\Request;
use App\Models;

class DataPakanController extends Controller
{
    public function index()
    {
        $data = DataPakan::all();
        $type_menu = "Data Master";
        return view('data_pakan.index', compact('type_menu', 'data'));
    }
    public function create()
    {
        $type_menu = "Data Master";
        return view('data_pakan.create', compact('type_menu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pakan' => 'required',
            'jenis_pakan' => 'required',
            'deskripsi' => 'required',
        ]);

        DataPakan::create($request->all());

        return redirect()->route('data_pakan.index')->with('success', 'Data Pakan added successfully!');
    }
    public function edit($id)
    {
        $dataPakan = DataPakan::findOrFail($id);
        $type_menu = "Data Master";
        return view('data_pakan.edit', compact('type_menu', 'dataPakan'));
    }

    public function update(Request $request, $id)
    {
        $dataPakan = DataPakan::findOrFail($id);
        $dataPakan->update($request->all());

        return redirect()->route('data_pakan.index')->with('success', 'Data Pakan updated successfully!');
    }

    public function destroy($id)
    {
        $dataPakan = DataPakan::findOrFail($id);
        $dataPakan->delete();

        return redirect()->route('data_pakan.index')->with('success', 'Data Pakan deleted successfully!');
    }
}
