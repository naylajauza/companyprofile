<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use App\Models\Fasilitas;
class Fasilitascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = Fasilitas::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.fasilitas.index', compact('fasilitas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_ruangan' => 'required',
            'deskripsi' => 'required',
            'cover' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $fasilitas = new fasilitas();
        $fasilitas->nama_ruangan = $request->nama_ruangan;
        $fasilitas->deskripsi = $request->deskripsi;

       // upload cover
       if ($request->hasFile('cover')) {
        $img = $request->file('cover');
        $name = rand(1000, 9999) . $img->getClientOriginalName();
        $img->move('images/fasiltas/', $name);
        $fasilitas->cover = $name;
    }
    $fasilitas->save();

return redirect()->route('fasilitas.index')
    ->with('success', 'data berhasil ditambahkan');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_ruangan' => 'required',
            'deskripsi' => 'required',
            'cover' => 'required',
        ]);

        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->nama_ruangan = $request->nama_ruangan;
        $fasilitas->deskripsi = $request->deskripsi;

// upload cover
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/fasilitas/', $name);
            $fasilitas->cover = $name;
        }
        $fasilitas->save();

        Alert::success('Success', 'Edit Data Berhasil di Simpan')->autoclose(2000);
        return redirect()->route('fasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();
        Alert::success('Success', 'Data Ini Telah Di Hapus')->autoclose(2000);
        return redirect()->route('fasilitas.index');
    }
}
