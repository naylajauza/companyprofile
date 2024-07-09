<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use RealRashid\SweetAlert\Facades\Alert;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        // $title = 'Delete User!';
        // $text = "Are you sure you want to delete?";
        // confirmDelete($title, $text);
        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        return view('admin.user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'isAdmin' => 'required'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->isAdmin = $request->isAdmin;
        $user->save();
        // Alert::success('Success', 'Data Berhasil Ditambahkan')->autoclose(1500);

        return redirect()->route('users.index')
        ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findorfail($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'isAdmin' => 'required'
        ]);
        $user = User::findorfail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->isAdmin = $request->isAdmin;
        $user->save();
        // Alert::success('Success', 'Data Berhasil Diedit')->autoclose(1500);

        return redirect()->route('users.index')
        ->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        // Alert::success('Success', 'Data Berhasil Dihapus')->autoclose(1500);

        return redirect()->route('users.index')
        ->with('success', 'data berhasil di hapus');
    }
}
