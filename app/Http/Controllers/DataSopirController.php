<?php

namespace App\Http\Controllers;

use App\Models\DataSopir;
use Illuminate\Http\Request;

class DataSopirController extends Controller
{
    public function index()
    {
        $data = DataSopir::all();
        $type_menu = "Data Master";
        return view('data_sopir.index', compact('type_menu', 'data'));
    }

    public function create()
    {
        $type_menu = "Data Master";
        return view('data_sopir.create', compact('type_menu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_sopir' => 'required',
            'nopol' => 'required',
            'no_telp' => 'required',
            'status' => 'required',
        ]);

        DataSopir::create($request->all());

        return redirect()->route('data_sopir.index')->with('success', 'Data Sopir added successfully!');
    }

    public function edit($id)
    {
        $dataSopir = DataSopir::findOrFail($id);
        $type_menu = "Data Master";
        return view('data_sopir.edit', compact('type_menu', 'dataSopir'));
    }

    public function update(Request $request, $id)
    {
        $dataSopir = DataSopir::findOrFail($id);
        $dataSopir->update($request->all());

        return redirect()->route('data_sopir.index')->with('success', 'Data Sopir updated successfully!');
    }

    public function destroy($id)
    {
        $dataSopir = DataSopir::findOrFail($id);
        $dataSopir->delete();

        return redirect()->route('data_sopir.index')->with('success', 'Data Sopir deleted successfully!');
    }
}
