@extends('user.layout.main')

@section('content')
    {{-- Ijen start --}}
    <div class="container-fluid pt-4 pb-5 px-1">
        <div class="container">
            {{-- Teks judul --}}
            <div class="text-center">
                <h1 class="text-primary text-uppercase" id="txt-dest-judul" style="letter-spacing: 2px;">{{ $destination->name }}</h1>
            </div>

            {{-- Teks sub-judul --}}
            <div class="text-center mb-4">
                <h5 class="subtitle-text">{{ $destination->desc1 }}</h5>
            </div>

            {{-- Lightbox --}}
            <div class="d-flex flex-wrap justify-content-center px-1 px-sm-5" id="gallery-dest">
                @foreach ($destination->images as $index => $image)
                    @if ($index == 0)
                        <a href="{{ asset('img/' . $image->img) }}" data-sub-html="<h4>{{ $image->title }}</h4><p>{{ $image->desc }}</p>">
                            <img src="{{ asset('img/' . $image->img) }}" class="rounded w-100 mb-2 img-gallery">
                        </a>
                    @else
                        <a href="{{ asset('img/' . $image->img) }}" data-sub-html="<h4>{{ $image->title }}</h4><p>{{ $image->desc }}</p>" class="col-4 me-1" style="max-width: 32%">
                            <img src="{{ asset('img/' . $image->img) }}" class="rounded w-100 mb-2 img-gallery">
                        </a>
                    @endif
                @endforeach
            </div>

            {{-- Description --}}
            <div class="mt-3 px-lg-5 mx-lg-5 text-muted">
                @foreach ($destination->attractions as $attraction)
                    <h4>{{ $attraction->name }}</h4>
                    <p>{{ $attraction->desc }}</p>
                @endforeach <hr>
                <p>{{ $destination->desc2 }}</p>
            </div>

        </div>
    </div>
    {{-- Ijen end --}}
@endsection
