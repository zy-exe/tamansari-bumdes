@extends('user.layout.main')

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
                    <a href="https://wa.me/+6282334857609?text=Hello%2C%0A%0AI%27m+interested+in+booking+the+%22Study+to+Tamansari+1%22+package%2C+which+includes%3A%0A*+Cooking+traditional+food%0A*+Exploring+Seruni+tourism%0A1+day+for+Rp+220%2C000+per+person+for+%5BNumber+of+People+%28minimum+of+20+people%29%5D.+Could+you+please+provide+more+details+and+assist+with+the+booking%3F%0A%0AThanks%21" target="_blank" class="text-dark"
                        style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-study-1.webp') }}">
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
                    <a href="https://wa.me/+6282334857609?text=Hello%2C%0A%0AI%27m+interested+in+booking+the+%22Study+to+Tamansari+2%22+package%2C+which+includes%3A%0A*+Learning+Osing+Culture%0A*+Cooking+traditional+food%0A*+Create+beautiful+Batik%0A*+Exploring+Seruni+tourism%0A2+days+%26+1+day+for+Rp+620%2C000+per+person+for+%5BNumber+of+People+%28minimum+of+20+people%29%5D.+Could+you+please+provide+more+details+and+assist+with+the+booking%3F%0A%0AThanks%21" target="_blank" class="text-dark"
                        style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-study-2.webp') }}">
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
                    <a href="https://wa.me/+6282334857609?text=Hello%2C%0A%0AI%27m+interested+in+booking+the+%22Private+Trip+-+Explore+Ijen%22+package%2C+which+includes%3A%0A*+Exploring+Ijen+Crater%0A2+days+%26+1+night+for+Rp+1%2C400%2C000+per+person+for+%5BNumber+of+People+%28minimum+of+1-2+people%29%5D.+Could+you+please+provide+more+details+and+assist+with+the+booking%3F%0A%0AThanks%21" target="_blank" class="text-dark"
                        style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-ijen.webp') }}">
                        <div class="card-body">
                            <h4>Private Trip - Explore Ijen</h4>
                            <p class="text-secondary" style="min-height: 75px">Discover the mesmerizing <strong>Ijen Blue
                                    Fire</strong>, witness the breathtaking <strong>sunrise over Ijen</strong>, and marvel
                                at the
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
                    <a href="https://wa.me/+6282334857609?text=Hello%2C%0A%0AI%27m+interested+in+booking+the+%22Private+Trip+-+Explore+Ijen+Seruni%22+package%2C+which+includes%3A%0A*+Exploring+Ijen+Crater%0A*+Exploring+Seruni+tourism%0A2+days+%26+1+night+for+Rp+1%2C710%2C000+per+person+for+%5BNumber+of+People+%28minimum+of+1-2+people%29%5D.+Could+you+please+provide+more+details+and+assist+with+the+booking%3F%0A%0AThanks%21" target="_blank" class="text-dark"
                        style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-ijen-seruni.webp') }}">
                        <div class="card-body">
                            <h4>Private Trip - Explore Ijen Seruni</h4>
                            <p class="text-secondary" style="min-height: 75px">Discover the mesmerizing <strong>Ijen Blue
                                    Fire</strong>, witness <strong>sunrise over Ijen</strong>, the
                                beauty of <strong>Tosca Lake</strong>, and enjoy the serene natural springs of
                                <strong>Sendang Seruni</strong>.
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
                    <a href="https://wa.me/+6282334857609?text=Hello%2C%0A%0AI%27m+interested+in+booking+the+%22Private+Trip+-+Explore+Ijen+Terakota%22+package%2C+which+includes%3A%0A*+Exploring+Ijen+Crater%0A*+Exploring+Taman+Gandrung+Terakota%0A2+days+%26+1+night+for+Rp+1%2C800%2C000+per+person+for+%5BNumber+of+People+%28minimum+of+1-2+people%29%5D.+Could+you+please+provide+more+details+and+assist+with+the+booking%3F%0A%0AThanks%21" target="_blank" class="text-dark"
                        style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-ijen-terakota.webp') }}">
                        <div class="card-body">
                            <h4>Private Trip - Explore Ijen Terakota</h4>
                            <p class="text-secondary" style="min-height: 75px">Discover the mesmerizing <strong>Ijen Blue
                                    Fire</strong>, witness <strong>sunrise over Ijen</strong>, the
                                beauty of <strong>Tosca Lake</strong>, and immerse yourself in the cultural richness of
                                <strong>Taman Gandrung Terakota</strong>, featuring live performances of the
                                <strong>Gandrung dance</strong>.
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
                    <a href="https://wa.me/+6282334857609?text=Hello%2C%0A%0AI%27m+interested+in+booking+the+%22Private+Trip+-+Explore+DEWITARI%22+package%2C+which+includes%3A%0A*+Exploring+Ijen+Crater%0A*+Exploring+Seruni+tourism%0A*+Exploring+Taman+Gandrung+Terakota%0A2+days+%26+1+night+for+Rp+1%2C900%2C000+per+person+for+%5BNumber+of+People+%28minimum+of+1-2+people%29%5D.+Could+you+please+provide+more+details+and+assist+with+the+booking%3F%0A%0AThanks%21" target="_blank" class="text-dark"
                        style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-dewitari-private.webp') }}">
                        <div class="card-body">
                            <h4>Private Trip - Explore DEWITARI</h4>
                            <p class="text-secondary" style="min-height: 75px">Embark on the ultimate adventure, visiting
                                <strong>Ijen Crater</strong>, the tranquil <strong>Sendang Seruni</strong>, and the enchanting <strong>Taman Gandrung Terakota</strong>.
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
                                        <span class="price-text fw-bold d-block">Rp 1.900.000/Pax </span>
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
                    <a href="https://wa.me/+6282334857609?text=Hello%2C%0A%0AI%27m+interested+in+booking+the+%22Group+Trip+-+Explore+Ijen+1%22+package%2C+which+includes%3A%0A*+Exploring+Ijen+Crater%0A2+days+%26+1+night+for+Rp+590%2C000+per+person+for+%5BNumber+of+People+%28minimum+of+4+people%29%5D.+Could+you+please+provide+more+details+and+assist+with+the+booking%3F%0A%0AThanks%21" target="_blank" class="text-dark"
                        style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-ijen.webp') }}">
                        <div class="card-body">
                            <h4>Grup Trip - Explore Ijen 1</h4>
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
                    <a href="https://wa.me/+6282334857609?text=Hello%2C%0A%0AI%27m+interested+in+booking+the+%22Group+Trip+-+Explore+Ijen+2%22+package%2C+which+includes%3A%0A*+Exploring+Ijen+Crater%0A2+days+%26+1+night+for+Rp+630%2C000+per+person+for+%5BNumber+of+People+%28minimum+of+20+people%29%5D.+Could+you+please+provide+more+details+and+assist+with+the+booking%3F%0A%0AThanks%21" target="_blank" class="text-dark"
                        style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-ijen.webp') }}">
                        <div class="card-body">
                            <h4>Grup Trip - Explore Ijen 2</h4>
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
                    <a href="https://wa.me/+6282334857609?text=Hello%2C%0A%0AI%27m+interested+in+booking+the+%22Group+Trip+-+Explore+DEWITARI+1%22+package%2C+which+includes%3A%0A*+Exploring+Seruni+tourism%0A*+Exploring+Taman+Gandrung+Terakota%0A1+day+for+Rp+415%2C000+per+person+for+%5BNumber+of+People+%28minimum+of+20+people%29%5D.+Could+you+please+provide+more+details+and+assist+with+the+booking%3F%0A%0AThanks%21" target="_blank" class="text-dark"
                        style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-dewitari-grup-1.webp') }}">
                        <div class="card-body">
                            <h4>Grup Trip - Explore DEWITARI 1</h4>
                            <p class="text-secondary" style="min-height: 75px">Embark on the ultimate adventure, visiting
                                <strong>Ijen Crater</strong>, the tranquil <strong>Sendang Seruni</strong>, and the enchanting <strong>Taman Gandrung Terakota</strong> with
                                live performances of the Gandrung dance.
                            </p>
                            <hr>
                            <div class="row px-2">
                                <div class="col-6">
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3"
                                            style="color: #9ad3ff;"></i>Meal 1x</span> <br>
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
                    <a href="https://wa.me/+6282334857609?text=Hello%2C%0A%0AI%27m+interested+in+booking+the+%22Group+Trip+-+Explore+DEWITARI+2%22+package%2C+which+includes%3A%0A*+Exploring+Ijen+Crater%0A*+Exploring+Seruni+tourism%0A*+Exploring+Taman+Gandrung+Terakota%0A2+days+%26+1+night+for+Rp+1%2C030%2C000+per+person+for+%5BNumber+of+People+%28minimum+of+20+people%29%5D.+Could+you+please+provide+more+details+and+assist+with+the+booking%3F%0A%0AThanks%21" target="_blank" class="text-dark"
                        style="text-decoration: none;">
                        <img class="card-img-top rounded" src="{{ asset('img/pack-dewitari-grup-2.webp') }}">
                        <div class="card-body">
                            <h4>Grup Trip - Explore DEWITARI 2</h4>
                            <p class="text-secondary" style="min-height: 75px">Embark on the ultimate adventure, visiting
                                <strong>Ijen Crater</strong>, the tranquil <strong>Sendang Seruni</strong>, and the enchanting <strong>Taman Gandrung Terakota</strong> with
                                live performances of the Gandrung dance.
                            </p>
                            <hr>
                            <div class="row align-items-center px-2">
                                <div class="col-6">
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3"
                                            style="color: #9ad3ff;"></i>Homestay</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Meal 3x</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Snacks 1x</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Tour guide</span> <br>
                                    <span class="fac-text"><i class="fa-solid fa-circle-check fa-lg me-1 me-sm-3 mt-2"
                                            style="color: #9ad3ff;"></i>Health insurance</span> <br>
                                </div>
                                <div class="text-center col-6">
                                    <p class="price-text mb-1 fw-bold">2 Days & 1 Night</p>
                                    <div class="btn-book rounded p-2" style="background-color: #95D2B3">
                                        <span class="price-text fw-bold d-block">Rp 1.030.000/Pax </span>
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
    {{-- Grup Pack end --}}
@endsection
