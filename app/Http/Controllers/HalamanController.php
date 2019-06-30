<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function cekpromo()
    {
        return view('cekpromo');
    }
    public function comingsoon()
    {
        return view('layouts/comingsoon');
    }
    public function kumpulanartikel()
    {
        return view('kumpulanartikel');
    }
    public function fokusartikel()
    {
        return view('fokusartikel');
    }
}
