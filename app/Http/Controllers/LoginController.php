<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function tampillogin() {
        return view('home');
    
    }
}
