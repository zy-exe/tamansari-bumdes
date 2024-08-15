@extends('layout.main')

@section('content')
    {{-- Homestays and Villas start --}}
    <div class="py-5 px-5">
        <div class="pb-5">
            {{-- Teks --}}
            <div class="text-center mb-3">
                <h3 class="text-primary text-uppercase mb-4" style="letter-spacing: 3px;">Homestays & Villas</h3>
            </div>

            <div class="d-flex flex-wrap justify-content-center gap-2">

                {{-- Homestay Vivi --}}
                <div class="d-flex flex-column align-items-center col-12 col-md-6 col-lg-4 px-0 mb-4" style="max-width: 350px">
                    <div class="card card-hover" id="gallery-homestay-1">
                        <a href="{{ asset('img/hs-vivi-1.webp') }}" data-sub-html="">
                            <img src="{{ asset('img/hs-vivi-1.webp') }}" class="card-img-top img-gallery">
                        </a>
                        <a href="{{ asset('img/hs-vivi-2.webp') }}" hidden>
                            <img src="{{ asset('img/hs-vivi-2.webp') }}">
                        </a>
                        <a href="{{ asset('img/hs-vivi-3.webp') }}" hidden>
                            <img src="{{ asset('img/hs-vivi-3.webp') }}">
                        </a>
                        <a href="{{ asset('img/hs-vivi-4.webp') }}" hidden>
                            <img src="{{ asset('img/hs-vivi-4.webp') }}">
                        </a>
                        <a href="{{ asset('img/hs-vivi-5.webp') }}" hidden>
                            <img src="{{ asset('img/hs-vivi-5.webp') }}">
                        </a>
                        <a href="{{ asset('img/hs-vivi-6.webp') }}" hidden>
                            <img src="{{ asset('img/hs-vivi-6.webp') }}">
                        </a>
                    </div>
                    <h4 class="mx-3 mt-2">Vivi Homestay</h4>
                </div>

                {{-- Homestay Java --}}
                <div class="d-flex flex-column align-items-center col-12 col-md-6 col-lg-4 px-0 mb-4" style="max-width: 350px">
                    <div class="card card-hover" style="max-width: 350px" id="gallery-homestay-2">
                        <a href="{{ asset('img/hs-java-1.webp') }}" data-sub-html="">
                            <img src="{{ asset('img/hs-java-1.webp') }}" class="card-img-top img-gallery">
                        </a>
                        <a href="{{ asset('img/hs-java-2.webp') }}" hidden>
                            <img src="{{ asset('img/hs-java-2.webp') }}">
                        </a>
                        <a href="{{ asset('img/hs-java-3.webp') }}" hidden>
                            <img src="{{ asset('img/hs-java-3.webp') }}">
                        </a>
                        <a href="{{ asset('img/hs-java-4.webp') }}" hidden>
                            <img src="{{ asset('img/hs-java-4.webp') }}">
                        </a>
                        <a href="{{ asset('img/hs-java-5.webp') }}" hidden>
                            <img src="{{ asset('img/hs-java-5.webp') }}">
                        </a>
                        <a href="{{ asset('img/hs-java-6.webp') }}" hidden>
                            <img src="{{ asset('img/hs-java-6.webp') }}">
                        </a>
                    </div>
                    <h4 class="mx-3 mt-2">Java Ijen Homestay</h4>
                </div>

                {{-- Homestay Hadi --}}
                <div class="d-flex flex-column align-items-center col-12 col-md-6 col-lg-4 px-0 mb-4" style="max-width: 350px">
                    <div class="card card-hover" style="max-width: 350px" id="gallery-homestay-3">
                        <a href="{{ asset('img/hs-hadi-1.webp') }}" data-sub-html="">
                            <img src="{{ asset('img/hs-hadi-1.webp') }}" class="card-img-top img-gallery">
                        </a>
                        <a href="{{ asset('img/hs-hadi-2.webp') }}" hidden>
                            <img src="{{ asset('img/hs-hadi-2.webp') }}">
                        </a>
                        <a href="{{ asset('img/hs-hadi-3.webp') }}" hidden>
                            <img src="{{ asset('img/hs-hadi-3.webp') }}">
                        </a>
                        <a href="{{ asset('img/hs-hadi-4.webp') }}" hidden>
                            <img src="{{ asset('img/hs-hadi-4.webp') }}">
                        </a>
                        <a href="{{ asset('img/hs-hadi-5.webp') }}" hidden>
                            <img src="{{ asset('img/hs-hadi-5.webp') }}">
                        </a>
                        <a href="{{ asset('img/hs-hadi-6.webp') }}" hidden>
                            <img src="{{ asset('img/hs-hadi-6.webp') }}">
                        </a>
                    </div>
                    <h4 class="mx-3 mt-2">Hadi Homestay</h4>
                </div>

            </div>
        </div>
    </div>
    {{-- Homestays and Villas end --}}
@endsection
