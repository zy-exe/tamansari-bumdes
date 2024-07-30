@extends('layout.main')

@section('content')
    {{-- Terakota start --}}
    <div class="container-fluid pt-4 pb-5 px-1">
        <div class="container">
            {{-- Teks judul --}}
            <div class="text-center">
                <h1 class="text-primary text-uppercase" style="letter-spacing: 2px;">Taman Gandrung Terakota</h1>
            </div>

            {{-- Teks sub-judul --}}
            <div class="text-center mb-4">
                <h5 class="subtitle-text">Enchanting cultural heritage of Banyuwangi <br>
                    featuring <strong>1.000 Statues of Gandrung Dancer</strong> and <strong>Live Performance of Gandrung
                        Dance</strong></h5>
            </div>

            {{-- Lightbox --}}
            <div class="d-flex flex-wrap justify-content-center px-1 px-sm-5" id="dest-gallery">
                <a href="{{ asset('img/dest-terakota-1.png') }}" data-sub-html="<h4>Taman Gandrung Terakota</h4><p>Experience Taman Gandrung Terakota, an enchanting cultural park featuring terracotta statues and traditional Banyuwangi dance performances, providing a captivating glimpse into local heritage.</p>">
                    <img src="{{ asset('img/dest-terakota-1.png') }}" class="img-gallery rounded w-100 mb-2">
                </a>
                <a href="{{ asset('img/dest-terakota-2.png') }}" data-sub-html="<h4>Taman Gandrung Terakota</h4><p>Experience Taman Gandrung Terakota, an enchanting cultural park featuring terracotta statues and traditional Banyuwangi dance performances, providing a captivating glimpse into local heritage.</p>" class="rounded col-4 me-1" style="max-width: 32%">
                    <img src="{{ asset('img/dest-terakota-2.png') }}" class="img-gallery rounded w-100 mb-2">
                </a>
                <a href="{{ asset('img/dest-terakota-3.png') }}" data-sub-html="<h4>Taman Gandrung Terakota</h4><p>Experience Taman Gandrung Terakota, an enchanting cultural park featuring terracotta statues and traditional Banyuwangi dance performances, providing a captivating glimpse into local heritage.</p>" class="rounded col-4 me-1" style="max-width: 32%">
                    <img src="{{ asset('img/dest-terakota-3.png') }}" class="img-gallery rounded w-100 mb-2">
                </a>
                <a href="{{ asset('img/dest-terakota-4.png') }}" data-sub-html="<h4>Taman Gandrung Terakota</h4><p>Experience Taman Gandrung Terakota, an enchanting cultural park featuring terracotta statues and traditional Banyuwangi dance performances, providing a captivating glimpse into local heritage.</p>" class="rounded col-4 me-1" style="max-width: 32%">
                    <img src="{{ asset('img/dest-terakota-4.png') }}" class="img-gallery rounded w-100 mb-2">
                </a>
            </div>

            {{-- Description --}}
            <div class="mt-3 px-lg-5 mx-lg-5 text-muted">
                <h4>1.000 Statues of Gandrung Dancer</h4>
                <p>Step into the heart of Banyuwangi's rich cultural heritage at Taman Gandrung Terakota. This captivating
                    park is home to a stunning display of 1,000 statues of Gandrung dancers, each capturing the grace and
                    elegance of this traditional dance form. As you wander through the park, you'll be transported into a
                    world where art and culture come alive in the most beautiful way.</p>

                <h4>Live Performance of Gandrung Dance</h4>
                <p>At Taman Gandrung Terakota, you can witness the mesmerizing live performances of the Gandrung dance.
                    These performances offer a unique and authentic glimpse into the traditions of Banyuwangi, showcasing
                    the vibrant costumes, intricate movements, and enchanting music that define this beloved dance. It's an
                    experience that will leave you spellbound and deeply connected to the local culture.</p>

                <h4>Natural Landscapes</h4>
                <p>Set against a backdrop of lush greenery and breathtaking landscapes, the park provides a serene and
                    picturesque environment. Whether you're a culture enthusiast, a photographer, or simply looking for a
                    peaceful retreat, Taman Gandrung Terakota offers a perfect blend of natural beauty and cultural
                    richness.</p>

                <hr>
                <p>Don't miss the opportunity to immerse yourself in the enchanting world of Taman Gandrung Terakota. Plan
                    your visit today and discover why this unique cultural destination is a must-see for travelers from
                    around the world. Experience the magic of Banyuwangi's heritage and create memories that will last a
                    lifetime.</p>
            </div>

        </div>
    </div>
    {{-- Terakota end --}}
@endsection
