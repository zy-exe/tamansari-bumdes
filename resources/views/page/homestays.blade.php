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

                {{-- Homestay 1 --}}
                <div class="card card-hover col-12 col-sm-6 col-lg-4 border border-2 px-0" style="max-width: 350px">
                    <a href="" target="_blank" class="text-dark" style="text-decoration: none">
                        <img class="card-img-top" src="{{ asset('img/hv-gabriel.jpg') }}">
                        <div class="card-body mx-3">
                            <h4 class="card-title">Gabriel Homestay</h4>
                            <h6 class="m-0 text-secondary"><i class="fa fa-star me-1" style="color: #FFD43B;"></i>
                                4.4<small> (747)</small>
                            </h6>
                        </div>
                    </a>
                </div>

                {{-- Homestay 2 --}}
                <div class="card card-hover col-12 col-sm-6 col-lg-4 border border-2 px-0" style="max-width: 350px">
                    <a href="" target="_blank" class="text-dark" style="text-decoration: none">
                        <img class="card-img-top" src="{{ asset('img/hv-gabriel.jpg') }}">
                        <div class="card-body mx-3">
                            <h4 class="card-title">Gabriel Homestay</h4>
                            <h6 class="m-0 text-secondary"><i class="fa fa-star me-1" style="color: #FFD43B;"></i>
                                4.4<small> (747)</small>
                            </h6>
                        </div>
                    </a>
                </div>

                {{-- Homestay 3 --}}
                <div class="card card-hover col-12 col-sm-6 col-lg-4 border border-2 px-0" style="max-width: 350px">
                    <a href="" target="_blank" class="text-dark" style="text-decoration: none">
                        <img class="card-img-top" src="{{ asset('img/hv-gabriel.jpg') }}">
                        <div class="card-body mx-3">
                            <h4 class="card-title">Gabriel Homestay</h4>
                            <h6 class="m-0 text-secondary"><i class="fa fa-star me-1" style="color: #FFD43B;"></i>
                                4.4<small> (747)</small>
                            </h6>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    {{-- Homestays and Villas end --}}
@endsection
