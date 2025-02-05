@extends('layouts.galery.basic')

@section('content')
<<<<<<< HEAD
    <div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        {{-- <div>
            Galery
        </div> --}}

        <div class="galery-container">
            <div class="add-gambar-container">
                <button class="add-gambar">
                    <a href="{{ route('NewGalery') }}">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                </button>
            </div>
            @foreach ($fotos as $foto)
                <div class="gambar-container">
                    <a href="{{ route('detail-foto', $foto->id) }}">
                        <img class="gambar" src="{{ asset('storage/' . $foto->lokasifile) }}">
                    </a>
                    <div class="gambar-button">
                        <button>
                            <a href="{{ route('detail-foto', $foto->id) }}">
                                <i class="fa-regular fa-comment" style="color: black"></i>
                            </a>
                        </button>

                        <button id="like-btn-{{ $foto->id }}" onclick="like({{ $foto->id }})">
                            <i id="like-icon-{{ $foto->id }}"
                                class="{{ $foto->is_liked ? 'fa-solid fa-heart' : 'fa-regular fa-heart' }}"
                                style="color: {{ $foto->is_liked ? 'red' : 'black' }};">
                            </i>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
=======
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
>>>>>>> 21fed020a1d1a480896a1f9c099ffbbf0eb48d14
@endsection
