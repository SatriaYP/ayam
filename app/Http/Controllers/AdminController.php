<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $data = Admin::all();
        $type_menu = "Admin Management";
        return view('admin.index', compact('type_menu', 'data'));
    }

    public function create()
    {
        $type_menu = "Admin Management";
        return view('admin.create', compact('type_menu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'password' => 'required|min:6',
            'nama' => 'required',
            'email' => 'required|email|unique:admin,email',
            'no_telp' => 'required',
        ]);

        $request['password'] = Hash::make($request['password']);
        Admin::create($request->all());

        return redirect()->route('admin.index')->with('success', 'Admin added successfully!');
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        $type_menu = "Admin Management";
        return view('admin.edit', compact('type_menu', 'admin'));
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'email' => 'required|email|unique:admin,email,' . $admin->id,
            'no_telp' => 'required',
        ]);

        $admin->update($request->all());

        return redirect()->route('admin.index')->with('success', 'Admin updated successfully!');
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully!');
    }
}
