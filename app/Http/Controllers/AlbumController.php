<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AlbumController extends Controller
{
    public function album()
    {
        return view('galery.album');
    }

    public function NewAlbum()
    {
        $user = Auth::user();
        return view('galery.NewAlbum', compact('user'));
    }

    public function AddAlbum(Request $request)
    {

        Log::info('Request data received for AddAlbum:', $request->all());

        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
        ]);



        Album::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tanggal' => now(),
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('album');
    }
}
