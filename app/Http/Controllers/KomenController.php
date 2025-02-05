<?php

namespace App\Http\Controllers;

use App\Models\foto;
use App\Models\komen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KomenController extends Controller
{
    public function komentar(Request $request)
    {

        // dd($request->all(), $foto_id);

        $request->validate([
            'foto_id' => 'required|exists:fotos,id',
            'isi' => 'required|string|max:255',
        ]);

<<<<<<< HEAD
        

=======
>>>>>>> 21fed020a1d1a480896a1f9c099ffbbf0eb48d14
        komen::create([
            'foto_id' => $request->foto_id,
            'user_id' => auth()->id(),
            'isi' => $request->isi,
            'tanggal' => now(),
        ]);

        return redirect()->route('detail-foto', ['id' => $request->foto_id]);
    }

}
