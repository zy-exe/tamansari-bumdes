@extends('layout.main')

@section('content')
    {{-- Seruni start --}}
    <div class="container-fluid pt-4 pb-5 px-1">
        <div class="container">
            {{-- Teks judul --}}
            <div class="text-center">
                <h1  class="text-primary text-uppercase" style="letter-spacing: 2px;">Sendang Seruni</h1>
            </div>

            {{-- Teks sub-judul --}}
            <div class="text-center mb-4">
                <h5 class="subtitle-text">Discover the tranquil beauty and cultural richness of Sendang Seruni, <br>
                    where crystal-clear <strong>natural springs</strong> and <strong>lush greenery</strong> offer a serene escape into nature's embrace.</h5>
            </div>

            {{-- Lightbox --}}
            <div class="d-flex flex-wrap justify-content-center px-1 px-sm-5">
                <a href="{{ asset('img/dest-seruni-1.webp') }}" data-toggle="lightbox" data-footer="Tosca Lake of Ijen" data-gallery="gallery-ijen">
                    <img src="{{ asset('img/dest-seruni-1.webp') }}" class="img-gallery rounded w-100 mb-2">
                </a>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="{{ asset('img/dest-seruni-2.webp') }}" data-toggle="lightbox" data-gallery="gallery-ijen" data-footer="Tosca Lake of Ijen" class="rounded col-4 me-1" style="max-width: 32%">
                        <img src="{{ asset('img/dest-seruni-2.webp') }}" class="img-gallery rounded w-100 mb-2">
                    </a>
                    <a href="{{ asset('img/dest-seruni-3.webp') }}" data-toggle="lightbox" data-gallery="gallery-ijen" data-footer="Tosca Lake of Ijen" class="rounded col-4 me-1" style="max-width: 32%">
                        <img src="{{ asset('img/dest-seruni-3.webp') }}" class="img-gallery rounded w-100 mb-2">
                    </a>
                    <a href="{{ asset('img/dest-seruni-4.webp') }}" data-toggle="lightbox" data-gallery="gallery-ijen" data-footer="Tosca Lake of Ijen" class="rounded col-4 me-1" style="max-width: 32%">
                        <img src="{{ asset('img/dest-seruni-4.webp') }}" class="img-gallery rounded w-100 mb-2">
                    </a>
                </div>
            </div>

            {{-- Description --}}
            <div class="mt-3 px-lg-5 mx-lg-5 text-muted">
                <h4>Natural Springs</h4>
                <p>Uncover the hidden gem of Banyuwangi at Sendang Seruni, a tranquil haven known for its crystal-clear natural springs and lush, verdant surroundings. Nestled in the heart of East Java, this serene destination offers a refreshing escape into nature's pure embrace, making it a must-visit spot for those seeking peace and relaxation.</p>
                <h4>A Sacred Place</h4>
                <p>More than just a beautiful natural site, Sendang Seruni holds deep cultural and spiritual significance for the local community. The spring is revered as a sacred place, steeped in local legends and traditions. Visitors often partake in quiet moments of reflection or local rituals, connecting with the profound cultural heritage of Banyuwangi.</p>
                <hr>
                <p>Don't miss the opportunity to experience the unique charm of Sendang Seruni. Plan your visit today and immerse yourself in the natural beauty and cultural richness of Banyuwangi's serene oasis. Whether you're seeking adventure or tranquility, Sendang Seruni promises an unforgettable journey into the heart of East Java.</p>                
            </div>

        </div>
    </div>
    {{-- Seruni end --}}
@endsection
