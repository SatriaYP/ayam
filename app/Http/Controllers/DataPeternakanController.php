<?php

namespace App\Http\Controllers;

use App\Models\DataPeternakan;
use App\Models\User;
use Illuminate\Http\Request;

class DataPeternakanController extends Controller
{
    public function index()
    {
        $data = DataPeternakan::join('user', 'user.id', '=', 'data_peternakan.id_user')->select('data_peternakan.id','data_peternakan.nama_peternakan', 'data_peternakan.kapasitas', 'data_peternakan.alamat', 'data_peternakan.no_telp', 'user.nama')->get();
        $type_menu = "Data Peternakan";
        // dd($data);
        return view('data_peternakan.index', compact('type_menu', 'data'));
    }

    public function create()
    {
        $data_user = User::all();
        $type_menu = "Data Peternakan";
        return view('data_peternakan.create', compact('type_menu', 'data_user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_peternakan' => 'required',
            'kapasitas' => 'required|integer',
            'alamat' => 'required',
            'no_telp' => 'required',
            'id_user' => 'required|integer',
        ]);

        DataPeternakan::create($request->all());

        return redirect()->route('data_peternakan.index')->with('success', 'Data Peternakan added successfully!');
    }

    public function edit($id)
    {
        $data_user = User::all();
        $dataPeternakan = DataPeternakan::findOrFail($id);
        $type_menu = "Data Peternakan";
        return view('data_peternakan.edit', compact('type_menu', 'dataPeternakan', 'data_user'));
    }

    public function update(Request $request, $id)
    {
        $dataPeternakan = DataPeternakan::findOrFail($id);

        $request->validate([
            'nama_peternakan' => 'required',
            'kapasitas' => 'required|integer',
            'alamat' => 'required',
            'no_telp' => 'required',
            'id_user' => 'required|integer',
        ]);

        $dataPeternakan->update($request->all());

        return redirect()->route('data_peternakan.index')->with('success', 'Data Peternakan updated successfully!');
    }

    public function destroy($id)
    {
        $dataPeternakan = DataPeternakan::findOrFail($id);
        $dataPeternakan->delete();

        return redirect()->route('data_peternakan.index')->with('success', 'Data Peternakan deleted successfully!');
    }
}
