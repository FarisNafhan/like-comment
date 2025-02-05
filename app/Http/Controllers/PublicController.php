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
<<<<<<< HEAD
        $fotos = foto::inRandomOrder()->get();
=======
        $fotos = foto::all();
>>>>>>> 21fed020a1d1a480896a1f9c099ffbbf0eb48d14
        return view('galery.home' ,compact('fotos'));
    }
    public function detailFoto($id)
    {
        $foto = foto::with('komentar')->findOrFail($id);
        return view('galery.detailFoto' ,compact('foto'));
    }
}
