@extends('user.layout.main')

@section('content')
    {{-- Homestays and Villas start --}}
    <div class="py-5 px-5">
        <div class="pb-5">
            {{-- Teks --}}
            <div class="text-center mb-3">
                <h3 class="text-primary text-uppercase mb-4" style="letter-spacing: 3px;">Homestays & Villas</h3>
            </div>

            <div class="d-flex flex-wrap justify-content-center gap-2">

                {{-- loop through homestays --}}
                @foreach ($homestays as $index_hs => $homestay)
                <div class="d-flex flex-column align-items-center col-12 col-md-6 col-lg-4 px-0 mb-4" style="max-width: 350px">
                    <div class="card card-hover" id="gallery-homestay-{{ $index_hs + 1 }}">
                    {{-- loop through homestay images --}}
                    @foreach ($homestay->images as $index_img => $image)
                        <a href="{{ asset('img/' . $image->img) }}" data-sub-html="<h3>{{ $image->desc }}</h3>">
                            <img src="{{ asset('img/' . $image->img) }}" class="card-img-top img-gallery" {{ $index_img > 0 ? 'hidden' : '' }}>
                        </a>
                    @endforeach
                    </div>
                    <h4 class="mx-3 mt-2">{{ $homestay->name }}</h4>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    {{-- Homestays and Villas end --}}
@endsection
