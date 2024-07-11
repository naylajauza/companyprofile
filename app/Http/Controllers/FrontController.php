<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\kurikulum;
use App\Models\fasilitas;
use App\Models\eskul;

class FrontController extends Controller
{

    public function index()
    {
        $artikel = artikel::all();
        return view('user.index', compact('artikel'));
    }
    public function kontak()
    {
        return view('user.kontak');
    }
    public function profile()
    {
        return view('user.profile ');
    }
    public function fasilitas()
    {
        $fasilitas = fasilitas::all();
        return view('user.fasilitas', compact('fasilitas'));
    }
    public function kurikulum()
    {
        $kurikulum = kurikulum::all();
        return view('user.kurikulum', compact('kurikulum'));
    }
    public function ekstrakurikuler()
    {
        $eskul = eskul::all();
        return view('user.eskul', compact('eskul'));
    }



}
