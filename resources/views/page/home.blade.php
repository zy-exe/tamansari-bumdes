@extends('layout.main')

@section('content')
    {{-- Landing Mobile start --}}
    <div id="landingMobile" class="text-center py-5 px-3 w-100" style="max-height: 500px">
        <h1 id="txt-lm-1" class="mx-3">Welcome to <br> Tamansari Tourism Village</h1>
        <h3 id="txt-lm-2">Discover Authentic Cultural Experiences in Tamansari</h3>
        <a href="/packages" class="btn btn-success p-2 px-3 mt-2">Book your adventure today!</a>
    </div>
    {{-- Landing Mobile end --}}

    {{-- Carusel start --}}
    <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active"
                aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item bg-dark">
                <img src="{{ asset('img/car-ijen.webp') }}" class="d-block w-100" alt="Slide Image" style="opacity: 0.5;">

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Ijen Crater</h1>
                        <p>Experience the breathtaking <strong>Blue Flames</strong> and <strong>Tosca Lake of
                            Ijen</strong>, East Java's hidden gem, where
                        adventure meets nature's raw beauty.</p>
                        <p><a class="btn btn-lg btn-primary" href="/destinations-ijen">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg-dark">
                <img src="{{ asset('img/car-terakota.webp') }}" class="d-block w-100" alt="Slide Image"
                    style="opacity: 0.5;">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Taman Gandrung Terakota</h1>
                        <p>Enchanting cultural heritage of Banyuwangi featuring <strong>1.000 Statues of Gandrung Dancer</strong> and <strong>Live Performance of Gandrung Dance</strong></p>
                        <p><a class="btn btn-lg btn-primary" href="/destinations-terakota">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active bg-dark">
                <img src="{{ asset('img/car-seruni.webp') }}" class="d-block w-100" alt="Slide Image" style="opacity: 0.5;">

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Sendang Seruni</h1>
                        <p>Discover the tranquil beauty and cultural richness of Sendang Seruni, where crystal-clear <strong>natural springs</strong> and <strong>lush greenery</strong> offer a serene escape into nature's embrace.</p>
                        <p><a class="btn btn-lg btn-primary" href="/destinations-seruni">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- Carousel end --}}

    {{-- Expeditions Packets start --}}
    <div class="container-fluid pt-4 pb-5 px-1">
        <div class="container">
            {{-- Teks --}}
            <div class="text-center mb-3">
                <h3 class="text-primary text-uppercase mb-4" style="letter-spacing: 3px;">Tour Packages</h3>
            </div>

            <div class="d-flex flex-wrap justify-content-center px-3 gap-3">

                {{-- Package 1 --}}
                <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                    <a href="https://wa.me/+6282334857609?text=Hello%2C%0A%0AI%27m+interested+in+booking+the+%22Study+to+Tamansari+2%22+package%2C+which+includes%3A%0A*+Learning+Osing+Culture%0A*+Cooking+traditional+food%0A*+Create+beautiful+Batik%0A*+Exploring+Seruni+tourism%0A2+days+%26+1+day+for+Rp+620%2C000+per+person+for+%5BNumber+of+People+%28minimum+of+20+people%29%5D.+Could+you+please+provide+more+details+and+assist+with+the+booking%3F%0A%0AThanks%21" target="_blank" class="text-dark" style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-s-1.webp') }}">
                        <div class="card-body">
                            <h4>Study to Tamansari 1</h4>
                            <p class="text-secondary" style="min-height: 75px">Learn <strong>Osing culture</strong>, Cook
                                <strong>traditional food</strong>, Make <strong>Banyuwangi batik</strong>, and
                                Explore <strong>Seruni tourism</strong>.
                            </p>
                            <hr>
                            <div class="row align-items-center px-2">
                                <div class="col-6">
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3"
                                            style="color: #9ad3ff;"></i>Homestay</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Meal 4x</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Snack 2x</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Merchandise</span> <br>
                                </div>
                                <div class="text-center col-6">
                                    <p class="price-text mb-1 fw-bold">2 Days & 1 Night</p>
                                    <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                        <span class="price-text fw-bold d-block">Rp 620.000/Pax </span>
                                        <span class="price-text-2 fw-bold text-muted d-block">Min book 20 pax</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Package 2 --}}
                <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                    <a href="https://wa.me/+6282334857609?text=Hello%2C%0A%0AI%27m+interested+in+booking+the+%22Private+Trip+-+Explore+Ijen%22+package%2C+which+includes%3A%0A*+Exploring+Ijen+Crater%0A2+days+%26+1+night+for+Rp+1%2C400%2C000+per+person+for+%5BNumber+of+People+%28minimum+of+1-2+people%29%5D.+Could+you+please+provide+more+details+and+assist+with+the+booking%3F%0A%0AThanks%21" target="_blank" class="text-dark" style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-p-ijen.webp') }}">
                        <div class="card-body">
                            <h4>Private Trip - Explore Ijen</h4>
                            <p class="text-secondary" style="min-height: 75px">Discover the mesmerizing <strong>Ijen Blue Fire</strong>,
                                witness the breathtaking <strong>sunrise over Ijen</strong>, and marvel at the
                                beauty of <strong>Tosca Lake</strong>.
                            </p>
                            <hr>
                            <div class="row align-items-center px-2">
                                <div class="col-6">
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3"
                                            style="color: #9ad3ff;"></i>Homestay</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Meal 1x</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Tour guide</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Health insurance</span> <br>
                                </div>
                                <div class="text-center col-6">
                                    <p class="price-text mb-1 fw-bold">2 Days & 1 Night</p>
                                    <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                        <span class="price-text fw-bold d-block">Rp 1.400.000/Pax </span>
                                        <span class="price-text-2 fw-bold text-muted d-block">Min book 1-2 pax</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- More button --}}
                <div class="btn-more col-12 d-flex justify-content-end">
                    <a href="/packages" class="me-3 px-4 btn btn-primary btn-lg" style="">
                        More packages &nbsp;
                        <i class="fa-solid fa-angles-right fa-lg" style="color: #ffffff;"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
    {{-- Expeditions Packets end --}}

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
                    <a href="{{ asset('img/hs-vivi-1.webp') }}" class="text-dark" style="text-decoration: none">
                        <img class="card-img-top" src="{{ asset('img/hs-vivi-1.webp') }}">
                        {{-- <div hidden>
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
                        </div> --}}
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
                    <a href="/homestays" class="text-dark" style="text-decoration: none">
                        <img class="card-img-top" src="{{ asset('img/hs-java-1.webp') }}">
                        {{-- <div hidden>
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
                        </div> --}}
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
                    <a href="{{ asset('img/hs-hadi-1.webp') }}" class="text-dark" style="text-decoration: none">
                        <img class="card-img-top" src="{{ asset('img/hs-hadi-1.webp') }}">
                        {{-- <div hidden>
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
                        </div> --}}
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
