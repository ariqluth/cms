<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

   
}
