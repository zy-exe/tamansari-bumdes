<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3">
    <div class="container d-flex justify-content-start">
        {{-- Navbar logo & title --}}
        <img src="{{ asset('img/logo-tamansari.png') }}" width="50" height="50">
        {{-- <h4 class="text-white m-0 py-2 ps-4">Tamansari Village</h4> --}}

        {{-- Navbar toggler --}}
        <button class="navbar-toggler ms-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon my-toggler"></span>
        </button>

        {{-- Navbar menus --}}
        <div class="collapse navbar-collapse fw-bold" id="navbarCollapse">

            {{-- Old --}}
            <div class="navbar-nav ms-auto">
                {{-- Beranda --}}
                <a href="/" class="nav-item nav-link text-light px-4 {{ $title === 'Home' ? 'nav-active' : '' }}">
                    Home
                </a>

                {{-- Destinasi Wisata --}}
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-light px-4 {{ $title === 'Ijen Crater' || $title === 'Gandrung Terracotta Park' || $title === 'Sendang Seruni' ? 'nav-active' : '' }}" data-toggle="dropdown">
                        Destinations
                    </a>
                    <div class="dropdown-menu rounded-0 m-0 bg-dark">
                        @foreach ($navbar_dests as $navbar_dest)
                        <a href="/destinations/{{ $navbar_dest->slug }}" class="dropdown-item text-light {{ $title === $navbar_dest->name ? 'dropdown-active' : '' }}">{{ $navbar_dest->name }}</a>    
                        @endforeach
                    </div>
                </div>

                {{-- Paket Wisata --}}
                <a href="/packages" class="nav-item nav-link text-light px-4 {{ $title === 'Packages' ? 'nav-active' : '' }}">
                    Tour Packages
                </a>

                {{-- Homestay --}}
                <a href="/homestays" class="nav-item nav-link text-light px-4 {{ $title === 'Homestays' ? 'nav-active' : '' }}">
                    Homestays
                </a>

            </div>

        </div>
    </div>
</nav>
<!-- Navbar End -->

{{-- Dummy div to overflow navbar --}}
<div class="container" style="height: 80px; width:0px"></div>
