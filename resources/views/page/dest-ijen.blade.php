@extends('layout.main')

@section('content')
    {{-- Ijen start --}}
    <div class="container-fluid pt-4 pb-5 px-1">
        <div class="container">
            {{-- Teks judul --}}
            <div class="text-center">
                <h1 class="text-primary text-uppercase" style="letter-spacing: 2px;">Ijen Crater</h1>
            </div>

            {{-- Teks sub-judul --}}
            <div class="text-center mb-4">
                <h5 class="subtitle-text">Experience the breathtaking <strong>Blue Flames</strong> and <strong>Tosca Lake of
                        Ijen</strong>, East Java's hidden gem, <br> where
                    adventure meets nature's raw beauty.</h5>
            </div>

            {{-- Lightbox --}}
            <div class="d-flex flex-wrap justify-content-center px-1 px-sm-5" id="dest-gallery">
                <a href="{{ asset('img/dest-ijen-1.png') }}" data-sub-html="<h4>Tosca Lake of Ijen</h4><p>Explore Tosca Lake in Ijen Crater, where stunning turquoise waters set amidst volcanic landscapes create a breathtaking adventure for nature enthusiasts.</p>">
                    <img src="{{ asset('img/dest-ijen-1.png') }}" class="rounded w-100 mb-2 img-gallery">
                </a>
                <a href="{{ asset('img/dest-ijen-2.png') }}" data-sub-html="<h4>Tosca Lake of Ijen</h4><p>Explore Tosca Lake in Ijen Crater, where stunning turquoise waters set amidst volcanic landscapes create a breathtaking adventure for nature enthusiasts.</p>" class="col-4 me-1" style="max-width: 32%">
                    <img src="{{ asset('img/dest-ijen-2.png') }}" class="rounded w-100 mb-2 img-gallery">
                </a>
                <a href="{{ asset('img/dest-ijen-3.png') }}" data-sub-html="<h4>Blue Fire</h4><p>Witness the rare and captivating blue flames of Ijen, a natural wonder caused by igniting sulfur gases, offering a truly unique and otherworldly experience for adventurers.</p>" class="col-4 me-1" style="max-width: 32%">
                    <img src="{{ asset('img/dest-ijen-3.png') }}" class="rounded w-100 mb-2 img-gallery">
                </a>
                <a href="{{ asset('img/dest-ijen-4.png') }}" data-sub-html="<h4>Blue Fire</h4><p>Witness the rare and captivating blue flames of Ijen, a natural wonder caused by igniting sulfur gases, offering a truly unique and otherworldly experience for adventurers.</p>" class="col-4 me-1" style="max-width: 32%">
                    <img src="{{ asset('img/dest-ijen-4.png') }}" class="rounded w-100 mb-2 img-gallery">
                </a>
            </div>

            {{-- Description --}}
            <div class="mt-3 px-lg-5 mx-lg-5 text-muted">
                <h4>Blue Flame</h4>
                <p>Immerse yourself in the awe-inspiring beauty of Ijen Crater, a destination like no other in East Java,
                    Indonesia. Known for its mesmerizing blue flames that dance in the night, Ijen offers a
                    once-in-a-lifetime experience for those seeking adventure and natural splendor.</p>
                <h4>Tosca Lake</h4>
                <p>Embark on a thrilling hike to the crater's edge, where you'll be rewarded with the sight of the world's
                    largest highly acidic crater lake, a stunning turquoise gem set against the rugged volcanic landscape.
                    Witness the incredible sight of sulfur miners at work, extracting vibrant yellow sulfur amidst billowing
                    clouds of volcanic gas.</p>
                <h4>Sunrise</h4>
                <p>As dawn breaks, the views from Ijen are nothing short of spectacular. The sunrise paints the sky in hues
                    of pink and orange, casting a magical glow over the serene lake and surrounding peaks. Whether you're an
                    avid adventurer, a nature enthusiast, or a photographer looking for that perfect shot, Ijen Crater
                    promises an unforgettable journey into the heart of nature's raw beauty.</p>
                <hr>
                <p>Join us at Ijen Crater and create memories that will last a lifetime. Book your adventure now and
                    discover why this hidden gem of East Java is a must-visit destination for travelers from around the
                    world.</p>
            </div>

        </div>
    </div>
    {{-- Ijen end --}}
@endsection
