@extends('layouts.galery.basic')

@section('content')
<div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div>
        Galery
    </div>

    <div>
        <a href="{{ route('NewGalery') }}"><button>Buat Galery</button></a>
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
</div>
@endsection
