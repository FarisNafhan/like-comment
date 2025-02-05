<?php

namespace App\Http\Controllers;

use App\Models\foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function landing()
    {
        $fotos = foto::all();
        return view('galery.landing', compact('fotos'));
    }

    public function home()
    {
        $fotos = foto::inRandomOrder()->get();
        return view('galery.home' ,compact('fotos'));
    }
    public function detailFoto($id)
    {
        $foto = foto::with('komentar')->findOrFail($id);
        return view('galery.detailFoto' ,compact('foto'));
    }
}
