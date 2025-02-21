<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class GaleryController extends Controller
{
    public function MyGalery()
    {
        $user_id = auth()->id();
        $fotos = foto::where('user_id', $user_id)->get();
        return view('galery.MyGalery', compact('fotos'));
    }

    public function NewGalery()
    {
<<<<<<< HEAD
        $user_id = auth()->id();
        $albums = Album::where('user_id', $user_id)->get();
        return view('galery.NewGalery', compact('albums'));
    }

    public function downloadFoto($id)
    {
        $foto = Foto::findOrFail($id);

        $file = storage_path('app/public/'. $foto->lokasifile);

        if (file_exists($file)) {
            return response()->download($file);
        } else {
            return abort(404, 'File Not Found');
        }
    }

=======
        $albums = Album::all();
        return view('galery.NewGalery', compact('albums'));
    }

>>>>>>> 21fed020a1d1a480896a1f9c099ffbbf0eb48d14
    public function AddGalery(Request $request)
    {
        Log::info('Data dari form yang dikirim:', $request->all());

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
<<<<<<< HEAD
            'lokasifile' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
=======
            'lokasifile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
>>>>>>> 21fed020a1d1a480896a1f9c099ffbbf0eb48d14
            'album_id' => 'required|exists:albums,id',
        ]);

        if ($request->hasFile('lokasifile')) {
            $filePath = $request->file('lokasifile')->store('galery', 'public');
            Log::info('File uploaded successfully: ' . $filePath);
        } else {
            Log::warning('No file uploaded.');
        }


        Foto::create([
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'lokasifile' => $filePath,
            'album_id' => $request->input('album_id'),
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('MyGalery')->with('success', 'Gacor Kang 🔥🔥🔥');
    }
}
