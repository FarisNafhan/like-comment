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
        <div>
            <form action="{{ route('komentar.store', $foto->id) }}" method="POST">
                @csrf
                <input type="hidden" name="foto_id" value="{{ $foto->id }}">
                <textarea name="isi" placeholder="Tambahkan komentar" cols="50" required></textarea>
                <button type="submit">Kirim</button>
            </form>


            <h3>komentar:</h3>
            @foreach ($foto->komentar as $komentar)
                <p><strong>{{ $komentar->user->username }}</strong>{{ $komentar->tanggal }}</p>
                <p>{{ $komentar->isi }}</p>
            @endforeach
        </div>
    </div>
</div>

@endsection
