<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pesertaC extends Controller
{
    public function index(){
        return view('pages.peserta');
    }

}
