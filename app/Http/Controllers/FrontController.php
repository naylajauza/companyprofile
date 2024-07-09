<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('user.index');
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
        return view('user.fasilitas ');
    }
    public function kurikulum()
    {
        return view('user.kurikulum');
    }
    public function ekstrakurikuler()
    {
        return view('user.eskul ');
    }
    


}
