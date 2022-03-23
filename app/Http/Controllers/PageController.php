<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //
    public function index()
    {
        return ('Hi! Selamat
        Datang di Website Laravel');
    }

    public function about()
    {
        return ("Nama : Ariq Luthfi Rifqi <br>
        Nim : 2141723002 <br>    
        Kelas : Teknologi Informasi 2 G ");
    }

    public function articles($id)
    {
        return ("Ini adalah halaman
        Artikel dengan ID: ".$id." ganti id sesuai dengan
        input dari url ");
    }

    // manggil database dengan Controller ,view , Route
    public function tampilpasta() {
        $pasta = DB::table('posts')->get();
        return view('slider', ['pasta' => $pasta]);
    }

    public function tampilpastaHome() {
        $pasta = DB::table('posts')->get();
        return view('masterLayout.kingPasta', ['pasta' => $pasta]);
    }

    public function tampilpastaMap() {
        $pasta = DB::table('posts')->get();
        return view('map', ['pasta' => $pasta]);
    }

    public function tampilpastaMenu() {
        $pasta = DB::table('posts')->get();
        return view('menu', ['pasta' => $pasta]);
    }

    public function tampilpastaContact() {
        $pasta = DB::table('posts')->get();
        return view('contact', ['pasta' => $pasta]);
    }
  
}
