@extends('layout.main')

@section('content')
    {{-- Study Pack start --}}
    <div class="container-fluid pt-4 pb-5 px-1">
        <div class="container">
            {{-- Teks --}}
            <div class="text-center mb-3">
                <h3 class="text-primary text-uppercase mb-4" style="letter-spacing: 3px;">Study Trip Packages</h3>
            </div>

            <div class="d-flex flex-wrap justify-content-center px-3 gap-3">

                {{-- Study pack 1 --}}
                <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                    <a href="https://wa.me/+6282334857609?text=Permisi%20mau%20tanya" target="_blank" class="text-dark" style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-p-ijen.png') }}">
                        <div class="card-body">
                            <h4>Study to Tamansari 1</h4>
                            <p class="text-secondary" style="min-height: 75px">Learn to make <strong>traditional
                                    food</strong> and explore the wonders of <strong>Seruni tourism</strong>.
                            </p>
                            <hr>
                            <div class="row align-items-center px-2">
                                <div class="col-6">
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3"
                                            style="color: #9ad3ff;"></i>Meal 1x</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Snacks 2x</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Merchandise</span> <br>
                                </div>
                                <div class="text-center col-6">
                                    <p class="price-text mb-1 fw-bold">1 Days</p>
                                    <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                        <span class="price-text fw-bold d-block">Rp 220.000/Pax </span>
                                        <span class="price-text-2 fw-bold text-muted d-block">Min book 20 pax</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Study pack 2 --}}
                <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                    <a href="https://wa.me/+6282334857609?text=Permisi%20mau%20tanya" target="_blank" class="text-dark" style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-s-1.png') }}">
                        <div class="card-body">
                            <h4>Study to Tamansari 2</h4>
                            <p class="text-secondary" style="min-height: 75px">Immerse yourself in <strong>Osing
                                    culture</strong>, learn to make
                                <strong>traditional food</strong>, create beautiful <strong>Banyuwangi batik</strong>, and
                                explore the wonders of
                                <strong>Seruni tourism</strong>.
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

            </div>

        </div>
    </div>
    {{-- Study Pack end --}}

    {{-- Private Pack start --}}
    <div class="container-fluid pt-4 pb-5 px-1">
        <div class="container">
            {{-- Teks --}}
            <div class="text-center mb-3">
                <h3 class="text-primary text-uppercase mb-4" style="letter-spacing: 3px;">Private Trip Packages</h3>
            </div>

            <div class="d-flex flex-wrap justify-content-center px-3 gap-3">

                {{-- Private ijen --}}
                <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                    <a href="https://wa.me/+6282334857609?text=Permisi%20mau%20tanya" target="_blank" class="text-dark" style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-p-ijen.png') }}">
                        <div class="card-body">
                            <h4>Private Trip - Explore Ijen</h4>
                            <p class="text-secondary" style="min-height: 75px">Discover the mesmerizing <strong>Ijen Blue
                                Fire</strong>, witness the breathtaking <strong>sunrise over Ijen</strong>, and marvel at the
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
                                            style="color: #9ad3ff;"></i>Tour Guide</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Health Insurance</span> <br>
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

                {{-- Private ijen-seruni --}}
                <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                    <a href="https://wa.me/+6282334857609?text=Permisi%20mau%20tanya" target="_blank" class="text-dark" style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-p-ijen.png') }}">
                        <div class="card-body">
                            <h4>Private Trip - Explore Ijen Seruni</h4>
                            <p class="text-secondary" style="min-height: 75px">Discover the mesmerizing <strong>Ijen Blue
                                    Fire</strong>,
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
                                        <span class="price-text fw-bold d-block">Rp 1.710.000/Pax </span>
                                        <span class="price-text-2 fw-bold text-muted d-block">Min book 1-2 pax</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Private ijen-terakota --}}
                <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                    <a href="https://wa.me/+6282334857609?text=Permisi%20mau%20tanya" target="_blank" class="text-dark" style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-p-ijen.png') }}">
                        <div class="card-body">
                            <h4>Private Trip - Explore Ijen Terakota</h4>
                            <p class="text-secondary" style="min-height: 75px">Discover the mesmerizing <strong>Ijen Blue
                                    Fire</strong>,
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
                                        <span class="price-text fw-bold d-block">Rp 1.800.000/Pax </span>
                                        <span class="price-text-2 fw-bold text-muted d-block">Min book 1-2 pax</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Private dewitari --}}
                <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                    <a href="https://wa.me/+6282334857609?text=Permisi%20mau%20tanya" target="_blank" class="text-dark" style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-p-ijen.png') }}">
                        <div class="card-body">
                            <h4>Private Trip - Explore DEWITARI</h4>
                            <p class="text-secondary" style="min-height: 75px">Discover the mesmerizing <strong>Ijen Blue
                                    Fire</strong>,
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

            </div>

        </div>
    </div>
    {{-- Private Pack end --}}

    {{-- Grup Pack start --}}
    <div class="container-fluid pt-4 pb-5 px-1">
        <div class="container">
            {{-- Teks --}}
            <div class="text-center mb-3">
                <h3 class="text-primary text-uppercase mb-4" style="letter-spacing: 3px;">Grup Trip Packages</h3>
            </div>

            <div class="d-flex flex-wrap justify-content-center px-3 gap-3">

                {{-- Grup ijen 1 --}}
                <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                    <a href="https://wa.me/+6282334857609?text=Permisi%20mau%20tanya" target="_blank" class="text-dark" style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-s-1.png') }}">
                        <div class="card-body">
                            <h4>Grup Trip - Explore Ijen 1</h4>
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
                                            style="color: #9ad3ff;"></i>Meal 1x</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Tour Guide</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Health Insurance</span> <br>
                                </div>
                                <div class="text-center col-6">
                                    <p class="price-text mb-1 fw-bold">2 Days & 1 Night</p>
                                    <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                        <span class="price-text fw-bold d-block">Rp 590.000/Pax </span>
                                        <span class="price-text-2 fw-bold text-muted d-block">Min book 4 pax</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Grup ijen 2 --}}
                <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                    <a href="https://wa.me/+6282334857609?text=Permisi%20mau%20tanya" target="_blank" class="text-dark" style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-s-1.png') }}">
                        <div class="card-body">
                            <h4>Grup Trip - Explore Ijen 2</h4>
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
                                            style="color: #9ad3ff;"></i>Meal 1x</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Tour Guide</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Health Insurance</span> <br>
                                </div>
                                <div class="text-center col-6">
                                    <p class="price-text mb-1 fw-bold">2 Days & 1 Night</p>
                                    <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                        <span class="price-text fw-bold d-block">Rp 630.000/Pax </span>
                                        <span class="price-text-2 fw-bold text-muted d-block">Min book 20 pax</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Grup dewitari 1 --}}
                <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                    <a href="https://wa.me/+6282334857609?text=Permisi%20mau%20tanya" target="_blank" class="text-dark" style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-p-ijen.png') }}">
                        <div class="card-body">
                            <h4>Grup Trip - Explore DEWITARI 1</h4>
                            <p class="text-secondary" style="min-height: 75px">Discover the mesmerizing <strong>Ijen Blue
                                    Fire</strong>,
                                witness the breathtaking <strong>sunrise over Ijen</strong>, and marvel at the
                                beauty of <strong>Tosca Lake</strong>.
                            </p>
                            <hr>
                            <div class="row align-items-center px-2">
                                <div class="col-6">
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3"
                                            style="color: #9ad3ff;"></i>Meal 1</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Snack 1x</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Tour guide</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Health insurance</span> <br>
                                </div>
                                <div class="text-center col-6">
                                    <p class="price-text mb-1 fw-bold">1 Days (6-7 Hours)</p>
                                    <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                        <span class="price-text fw-bold d-block">Rp 415.000/Pax </span>
                                        <span class="price-text-2 fw-bold text-muted d-block">Min book 20 pax</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Grup dewitari 2 --}}
                <div class="card card-hover col-12 col-lg-5 col-xl-6 pt-1 px-1" style="max-width: 500px">
                    <a href="https://wa.me/+6282334857609?text=Permisi%20mau%20tanya" target="_blank" class="text-dark" style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-p-ijen.png') }}">
                        <div class="card-body">
                            <h4>Grup Trip - Explore DEWITARI 2</h4>
                            <p class="text-secondary" style="min-height: 75px">Discover the mesmerizing <strong>Ijen Blue
                                    Fire</strong>,
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

            </div>

        </div>
    </div>
    {{-- Grup Pack end --}}
@endsection
