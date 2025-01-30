@extends('layouts.galery.basic')

@section('content')
    <div>
        home
    </div>
    <div>
        @foreach ($fotos as $foto)
            <div class="gambar-container">
                <a href="{{ route('detail-foto', $foto->id) }}">
                    <img class="gambar" src="{{ asset('storage/' . $foto->lokasifile) }}">
                </a>
            </div>
        @endforeach
    </div>
@endsection
