@extends('layouts.galery.basic')

@section('content')
<<<<<<< HEAD
    <div class="galery-container">
=======
    <div>
        home
    </div>
    <div>
>>>>>>> 21fed020a1d1a480896a1f9c099ffbbf0eb48d14
        @foreach ($fotos as $foto)
            <div class="gambar-container">
                <a href="{{ route('detail-foto', $foto->id) }}">
                    <img class="gambar" src="{{ asset('storage/' . $foto->lokasifile) }}">
                </a>
<<<<<<< HEAD
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
=======
>>>>>>> 21fed020a1d1a480896a1f9c099ffbbf0eb48d14
            </div>
        @endforeach
    </div>
@endsection
