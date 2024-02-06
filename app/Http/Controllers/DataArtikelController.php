<?php

namespace App\Http\Controllers;

use App\Models\DataArtikel;
use Illuminate\Http\Request;

class DataArtikelController extends Controller
{
    public function index()
    {
        $data = DataArtikel::all();
        $type_menu = "Data Artikel";
        return view('dataartikel.index', compact('type_menu', 'data'));
    }

    public function create()
    {
        $type_menu = "Data Artikel";
        return view('dataartikel.create', compact('type_menu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);

        DataArtikel::create($request->all());

        return redirect()->route('dataartikel.index')->with('success', 'Data Artikel added successfully!');
    }

    public function edit($id)
    {
        $dataArtikel = DataArtikel::findOrFail($id);
        $type_menu = "Data Artikel";
        return view('dataartikel.edit', compact('type_menu', 'dataArtikel'));
    }

    public function update(Request $request, $id)
    {
        $dataArtikel = DataArtikel::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);

        $dataArtikel->update($request->all());

        return redirect()->route('dataartikel.index')->with('success', 'Data Artikel updated successfully!');
    }

    public function destroy($id)
    {
        $dataArtikel = DataArtikel::findOrFail($id);
        $dataArtikel->delete();

        return redirect()->route('dataartikel.index')->with('success', 'Data Artikel deleted successfully!');
    }
}
