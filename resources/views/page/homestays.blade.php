@extends('layout.main')

@section('content')
    {{-- Homestays and Villas start --}}
    <div class="container-fluid py-5 px-5">
        <div class="container pb-5">
            {{-- Teks --}}
            <div class="text-center mb-3">
                <h3 class="text-primary text-uppercase mb-4" style="letter-spacing: 3px;">Homestays & Villas</h3>
            </div>

            <div class="row justify-content-center gap-2">

                {{-- Homestay Vivi --}}
                <div class="card card-hover col-12 col-sm-6 col-lg-4 border border-2 px-0" style="max-width: 350px">
                    <a href="{{ asset('img/hs-vivi-1.webp') }}" class="text-dark" data-toggle="lightbox" data-footer="" data-gallery="gallery-vivi" style="text-decoration: none">
                        <img class="card-img-top" src="{{ asset('img/hs-vivi-1.webp') }}">
                        <div hidden>
                            <a href="{{ asset('img/hs-vivi-2.webp') }}" data-toggle="lightbox" data-gallery="gallery-vivi" data-footer="" hidden>
                                <img src="{{ asset('img/hs-vivi-2.webp') }}">
                            </a>
                            <a href="{{ asset('img/hs-vivi-3.webp') }}" data-toggle="lightbox" data-gallery="gallery-vivi" data-footer="" hidden>
                                <img src="{{ asset('img/hs-vivi-3.webp') }}">
                            </a>
                            <a href="{{ asset('img/hs-vivi-4.webp') }}" data-toggle="lightbox" data-gallery="gallery-vivi" data-footer="" hidden>
                                <img src="{{ asset('img/hs-vivi-4.webp') }}">
                            </a>
                            <a href="{{ asset('img/hs-vivi-5.webp') }}" data-toggle="lightbox" data-gallery="gallery-vivi" data-footer="" hidden>
                                <img src="{{ asset('img/hs-vivi-5.webp') }}">
                            </a>
                            <a href="{{ asset('img/hs-vivi-6.webp') }}" data-toggle="lightbox" data-gallery="gallery-vivi" data-footer="" hidden>
                                <img src="{{ asset('img/hs-vivi-6.webp') }}">
                            </a>
                        </div>
                        <div class="card-body mx-3">
                            <h4 class="card-title">Vivi Homestay</h4>
                            {{-- <h6 class="m-0 text-secondary"><i class="fa fa-star me-1" style="color: #FFD43B;"></i>
                                4.4<small> (747)</small>
                            </h6> --}}
                        </div>
                    </a>
                </div>

                {{-- Homestay Java --}}
                <div class="card card-hover col-12 col-sm-6 col-lg-4 border border-2 px-0" style="max-width: 350px">
                    <a href="{{ asset('img/hs-java-1.webp') }}" class="text-dark" data-toggle="lightbox" data-footer="" data-gallery="gallery-ijen" style="text-decoration: none">
                        <img class="card-img-top" src="{{ asset('img/hs-java-1.webp') }}">
                        <div hidden>
                            <a href="{{ asset('img/hs-java-1.webp') }}" data-toggle="lightbox" data-gallery="gallery-ijen" data-footer="" hidden>
                                <img src="{{ asset('img/hs-java-1.webp') }}">
                            </a>
                            <a href="{{ asset('img/hs-java-2.webp') }}" data-toggle="lightbox" data-gallery="gallery-ijen" data-footer="" hidden>
                                <img src="{{ asset('img/hs-java-2.webp') }}">
                            </a>
                            <a href="{{ asset('img/hs-java-3.webp') }}" data-toggle="lightbox" data-gallery="gallery-ijen" data-footer="" hidden>
                                <img src="{{ asset('img/hs-java-3.webp') }}">
                            </a>
                            <a href="{{ asset('img/hs-java-4.webp') }}" data-toggle="lightbox" data-gallery="gallery-ijen" data-footer="" hidden>
                                <img src="{{ asset('img/hs-java-4.webp') }}">
                            </a>
                            <a href="{{ asset('img/hs-java-5.webp') }}" data-toggle="lightbox" data-gallery="gallery-ijen" data-footer="" hidden>
                                <img src="{{ asset('img/hs-java-5.webp') }}">
                            </a>
                            <a href="{{ asset('img/hs-java-6.webp') }}" data-toggle="lightbox" data-gallery="gallery-ijen" data-footer="" hidden>
                                <img src="{{ asset('img/hs-java-6.webp') }}">
                            </a>
                        </div>
                        <div class="card-body mx-3">
                            <h4 class="card-title">Java Ijen Homestay</h4>
                            {{-- <h6 class="m-0 text-secondary"><i class="fa fa-star me-1" style="color: #FFD43B;"></i>
                                4.4<small> (747)</small>
                            </h6> --}}
                        </div>
                    </a>
                </div>

                {{-- Homestay Hadi --}}
                <div class="card card-hover col-12 col-sm-6 col-lg-4 border border-2 px-0" style="max-width: 350px">
                    <a href="{{ asset('img/hs-hadi-1.webp') }}" class="text-dark" data-toggle="lightbox" data-footer="" data-gallery="gallery-hadi" style="text-decoration: none">
                        <img class="card-img-top" src="{{ asset('img/hs-hadi-1.webp') }}">
                        <div hidden>
                            <a href="{{ asset('img/hs-hadi-1.webp') }}" data-toggle="lightbox" data-gallery="gallery-hadi" data-footer="" hidden>
                                <img src="{{ asset('img/hs-hadi-1.webp') }}">
                            </a>
                            <a href="{{ asset('img/hs-hadi-2.webp') }}" data-toggle="lightbox" data-gallery="gallery-hadi" data-footer="" hidden>
                                <img src="{{ asset('img/hs-hadi-2.webp') }}">
                            </a>
                            <a href="{{ asset('img/hs-hadi-3.webp') }}" data-toggle="lightbox" data-gallery="gallery-hadi" data-footer="" hidden>
                                <img src="{{ asset('img/hs-hadi-3.webp') }}">
                            </a>
                            <a href="{{ asset('img/hs-hadi-4.webp') }}" data-toggle="lightbox" data-gallery="gallery-hadi" data-footer="" hidden>
                                <img src="{{ asset('img/hs-hadi-4.webp') }}">
                            </a>
                            <a href="{{ asset('img/hs-hadi-5.webp') }}" data-toggle="lightbox" data-gallery="gallery-hadi" data-footer="" hidden>
                                <img src="{{ asset('img/hs-hadi-5.webp') }}">
                            </a>
                            <a href="{{ asset('img/hs-hadi-6.webp') }}" data-toggle="lightbox" data-gallery="gallery-hadi" data-footer="" hidden>
                                <img src="{{ asset('img/hs-hadi-6.webp') }}">
                            </a>
                            <a href="{{ asset('img/hs-hadi-7.webp') }}" data-toggle="lightbox" data-gallery="gallery-hadi" data-footer="" hidden>
                                <img src="{{ asset('img/hs-hadi-7.webp') }}">
                            </a>
                        </div>
                        <div class="card-body mx-3">
                            <h4 class="card-title">Hadi Homestay</h4>
                            {{-- <h6 class="m-0 text-secondary"><i class="fa fa-star me-1" style="color: #FFD43B;"></i>
                                4.4<small> (747)</small>
                            </h6> --}}
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    {{-- Homestays and Villas end --}}
@endsection
