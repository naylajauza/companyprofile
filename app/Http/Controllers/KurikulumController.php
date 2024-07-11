<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use App\Models\Kurikulum;
class Kurikulumcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $kurikulum = Kurikulum::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.kurikulum.index', compact('kurikulum'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kurikulum.create');
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
            'nama_guru' => 'required',
            'jabatan' => 'required',
            'cover' => 'required|image|mimes:png,jpg,jpeg',
        ]);

       $kurikulum = new kurikulum();
        $kurikulum->nama_guru = $request->nama_guru;
        $kurikulum->jabatan = $request->jabatan;

       // upload cover
       if ($request->hasFile('cover')) {
        $img = $request->file('cover');
        $name = rand(1000, 9999) . $img->getClientOriginalName();
        $img->move('images/kurikulum/', $name);
        $kurikulum->cover = $name;
    }
    $kurikulum->save();

return redirect()->route('kurikulum.index')
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
       $kurikulum = Kurikulum::findOrFail($id);
        return view('admin.kurikulum.edit', compact('kurikulum'));
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
            'nama_guru' => 'required',
            'jabatan' => 'required',
            'cover' => 'required',
        ]);

       $kurikulum = Kurikulum::findOrFail($id);
        $kurikulum->nama_guru = $request->nama_guru;
        $kurikulum->jabatan = $request->jabatan;

// upload cover
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/kurikulum/', $name);
            $kurikulum->cover = $name;
        }
        $kurikulum->save();

        Alert::success('Success', 'Edit Data Berhasil di Simpan')->autoclose(2000);
        return redirect()->route('kurikulum.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy($id)
    {
       $kurikulum = Kurikulum::findOrFail($id);
        $kurikulum->delete();
        Alert::success('Success', 'Data Ini Telah Di Hapus')->autoclose(2000);
        return redirect()->route('kurikulum.index');
    }
}
