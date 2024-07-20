@extends('layout.main')

@section('content')
    {{-- Ijen start --}}
    <div class="container-fluid pt-4 pb-5 px-1">
        <div class="container">
            {{-- Teks judul --}}
            <div class="text-center">
                <h1  class="text-primary text-uppercase" style="letter-spacing: 2px;">Ijen Crater</h1>
            </div>

            {{-- Teks sub-judul --}}
            <div class="text-center mb-4">
                <h5 class="subtitle-text">Experience the breathtaking <strong>Blue Flames</strong> and <strong>Tosca Lake of
                        Ijen</strong>, East Java's hidden gem, <br> where
                    adventure meets nature's raw beauty.</h5>
            </div>

            {{-- Lightbox --}}
            <div class="d-flex flex-wrap justify-content-center px-1 px-sm-5">
                <a href="{{ asset('img/dest-ijen-1.webp') }}" data-toggle="lightbox" data-footer="Tosca Lake of Ijen" data-gallery="gallery-ijen">
                    <img src="{{ asset('img/dest-ijen-1.webp') }}" class="rounded w-100 mb-2 img-gallery">
                </a>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="{{ asset('img/dest-ijen-2.webp') }}" data-toggle="lightbox" data-gallery="gallery-ijen" data-footer="Tosca Lake of Ijen" class="col-4 me-1" style="max-width: 32%">
                        <img src="{{ asset('img/dest-ijen-2.webp') }}" class="rounded w-100 mb-2 img-gallery">
                    </a>
                    <a href="{{ asset('img/dest-ijen-3.webp') }}" data-toggle="lightbox" data-gallery="gallery-ijen" data-footer="Tosca Lake of Ijen" class="col-4 me-1" style="max-width: 32%">
                        <img src="{{ asset('img/dest-ijen-3.webp') }}" class="rounded w-100 mb-2 img-gallery">
                    </a>
                    <a href="{{ asset('img/dest-ijen-4.webp') }}" data-toggle="lightbox" data-gallery="gallery-ijen" data-footer="Tosca Lake of Ijen" class="col-4 me-1" style="max-width: 32%">
                        <img src="{{ asset('img/dest-ijen-4.webp') }}" class="rounded w-100 mb-2 img-gallery">
                    </a>
                </div>
            </div>

            {{-- Description --}}
            <div class="mt-3 px-lg-5 mx-lg-5 text-muted">
                <h4>Blue Flame</h4>
                <p>Immerse yourself in the awe-inspiring beauty of Ijen Crater, a destination like no other in East Java, Indonesia. Known for its mesmerizing blue flames that dance in the night, Ijen offers a once-in-a-lifetime experience for those seeking adventure and natural splendor.</p>
                <h4>Tosca Lake</h4>
                <p>Embark on a thrilling hike to the crater's edge, where you'll be rewarded with the sight of the world's largest highly acidic crater lake, a stunning turquoise gem set against the rugged volcanic landscape. Witness the incredible sight of sulfur miners at work, extracting vibrant yellow sulfur amidst billowing clouds of volcanic gas.</p>
                <h4>Sunrise</h4>
                <p>As dawn breaks, the views from Ijen are nothing short of spectacular. The sunrise paints the sky in hues of pink and orange, casting a magical glow over the serene lake and surrounding peaks. Whether you're an avid adventurer, a nature enthusiast, or a photographer looking for that perfect shot, Ijen Crater promises an unforgettable journey into the heart of nature's raw beauty.</p>
                <hr>
                <p>Join us at Ijen Crater and create memories that will last a lifetime. Book your adventure now and discover why this hidden gem of East Java is a must-visit destination for travelers from around the world.</p>
            </div>

        </div>
    </div>
    {{-- Ijen end --}}
@endsection
