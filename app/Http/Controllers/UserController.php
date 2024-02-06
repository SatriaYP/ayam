<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        $type_menu = "User Management";
        return view('user.index', compact('type_menu', 'data'));
    }

    public function create()
    {
        $type_menu = "User Management";
        return view('user.create', compact('type_menu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'password' => 'required|min:6',
        ]);

        $request['password'] = Hash::make($request['password']);
        User::create($request->all());

        return redirect()->route('user.index')->with('success', 'User added successfully!');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $type_menu = "User Management";
        return view('user.edit', compact('type_menu', 'user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'nama' => 'required',
        ]);
        $request['password'] = Hash::make($request['password']);
        $user->update($request->all());

        return redirect()->route('user.index')->with('success', 'User updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User deleted successfully!');
    }
}
