@extends('layouts.galery.foto')

@section('content')
<div class="foto-container">
<<<<<<< HEAD
    <div class="deskripsi-container">
        <div class="foto">
            <img src="{{ asset('storage/' . $foto->lokasifile) }}" alt="Foto">
        </div>
        <div>
            <p><strong>{{ $foto->judul }}</strong> - {{ $foto->created_at->format('d M Y') }}</p>
            <p><strong>Deskripsi:</strong><br>{{ $foto->deskripsi }}</p>
        </div>
    </div>

    <div class="komentar">
        <a href="{{ route('downloadFoto', $foto->id) }}">
            <button class="download">
                <i class="fa-solid fa-download">Unduh</i>
            </button>
        </a>
        <h3>Tambahkan Komentar</h3>
        <form action="{{ route('komentar.store', $foto->id) }}" method="POST">
            @csrf
            <input type="hidden" name="foto_id" value="{{ $foto->id }}">
            <textarea name="isi" placeholder="Tulis komentar..." required></textarea>
            <button type="submit">Kirim</button>
        </form>

        <div class="komentar-list">
            <h3>Komentar:</h3>
            @foreach ($foto->komentar as $komentar)
                <div class="komentar-item">
                    <p><strong>{{ $komentar->user->username }}</strong> - {{ $komentar->created_at->format('d M Y') }}</p>
                    <p>{{ $komentar->isi }}</p>
                </div>
=======
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
>>>>>>> 21fed020a1d1a480896a1f9c099ffbbf0eb48d14
            @endforeach
        </div>
    </div>
</div>

@endsection
