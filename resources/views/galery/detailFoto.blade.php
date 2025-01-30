@extends('layouts.galery.foto')

@section('content')
<div class="foto-container">
    <div class="deskripsi">
        deskripsi
        <div class="foto">
            <img class="gambar" src="{{ asset('storage/' . $foto->lokasifile) }}">
        </div>
        <p><strong>{{ $foto->judul }}</strong></p>
        <p><strong>di upload:</strong>{{ $foto->created_at->format('d M Y') }}</p>
        <strong>Deskripsi:</strong>
        <p>{{ $foto->deskripsi }}</p>
    </div>
    <div class="komentar">
        komentar

        <div>
            <form action="" method="post">
                @csrf
                
                <textarea name="komentar" placeholder="tambahkan komentar" cols="50"></textarea>
            </form>
        </div>
    </div>
</div>

@endsection
