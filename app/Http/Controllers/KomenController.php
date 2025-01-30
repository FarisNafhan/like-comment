<?php

namespace App\Http\Controllers;

use App\Models\foto;
use App\Models\komen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KomenController extends Controller
{
    public function komentar(Request $request, $foto_id)
    {
        $request->validate([
            'isi' => 'required|string|max:255',
        ]);

        komen::create([
            'foto_id' => $foto_id,
            'user_id' => Auth::id(),
            'isi' => $request->input('isi'),
            'tanggal' => now(),
        ]);
    }
}
