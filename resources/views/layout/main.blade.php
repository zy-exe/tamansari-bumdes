<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tamansari | {{ $title }}</title>
    <meta charset="UTF-8">
    <meta name="description" content="Explore the rich culture and stunning landscapes of Tamansari with our immersive travel packages. Book your adventure today for an unforgettable experience!">
    <meta name="keywords" content="Tamansari Tourism,Ijen,Kawah Ijen, Ijen Crater,Taman Gandrung Terakota,Sendang Seruni,Seruni Tourism,Tamansari,Licin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/logo-tamansari.png') }}" type="image/x-icon">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    {{-- Google Web Fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Font Awesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    {{-- Ekko Lightbox --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
    {{-- Customized Bootstrap Stylesheet --}}
    {{-- <link href="css/style.css" rel="stylesheet"> --}}

    <style>
        .card {
            position: relative;
            overflow: hidden;
        }

        .card-hover:hover {
            border: 1px solid black;
            box-shadow: 0px 0px 6px 8px rgba(0, 0, 0, 0.3);
            transform: scale(1.01);
            transition: box-shadow 0.3s ease-in-out;
            transition: transform 0.3s ease-in-out;
        }

        .card-hover:hover img {
            transform: scale(1.08);
            transition: 0.5s;
        }

        .nav-item:hover {
            background-color: green;
            transition: background-color 0.3s;
        }

        .nav-active {
            border-bottom: 3px solid green;
        }

        .btn-floating {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .btn-book:hover {
            box-shadow: 0px 0px 6px 8px rgba(0, 199, 76, 0.3);
            transition: box-shadow 0.3s ease-in-out;
        }

        .btn-wa-hover:hover {
            box-shadow: 0px 0px 6px 8px rgba(0, 160, 61, 0.3);
            transform: scale(1.1);
            transition: box-shadow 0.3s ease-in-out;
            transition: transform 0.3s ease-in-out;
        }

        .dropdown-item:hover {
            background-color: green;
        }

        .dropdown-active {
            background-color: green;
        }

        .btn-more-div {
            width: 100%;
        }

        .subtitle-text {
            color: #004085;
        }

        .img-gallery:hover {
            border: 1.5px solid black;
            box-shadow: 0px 0px 8px 8px rgba(0, 0, 0, 0.3);
            transition: box-shadow 0.3s;
        }

        .fac-text {
            font-size: 12px;
        }

        .price-text {
            font-size: 9px;
        }

        .price-text-2 {
            font-size: 8px;
        }
        #txt-lm-1 {
            font-size: 40px;
            font-weight: bolder;
        }
        @media (max-width: 415px) {
            #txt-lm-1 {
            font-size: 30px;
            font-weight: bolder;
            }
            #txt-lm-2 {
            font-size: 13px;
            }
        }
        #txt-lm-2 {
            font-size: 18px;
        }

        #myCarousel {
            display: none;
        }

        #landingMobile {
            display: block;
        }

        @media (min-width: 375px) {
            .price-text {
                font-size: 11px;
            }

            .price-text-2 {
                font-size: 10px;
            }
        }

        @media (min-width: 576px) {
            .price-text {
                font-size: 16px;
            }

            .price-text-2 {
                font-size: 13px;
            }

            .fac-text {
                font-size: 15px;
            }
        }

        @media (min-width: 768px) {
            .btn-more-div {
                width: 80%;
            }

            #myCarousel {
                display: block;
            }

            #landingMobile {
                display: none;
            }
        }

        @media (min-width: 992px) {
            .btn-more-div {
                width: 85%;
            }
        }

        @media (min-width: 1200px) {
            .btn-more-div {
                width: 95%;
            }
        }

        @media (min-width: 1400px) {
            .btn-more-div {
                width: 80%;
            }
        }
    </style>
</head>

<body style="background-color: #eeeeee">
    {{-- Navbar --}}
    @include('component.navbar')
    {{-- Navbar --}}

    {{-- Content --}}
    @yield('content')
    {{-- Content --}}

    {{-- Footer --}}
    @include('component.footer')
    {{-- Footer --}}

    {{-- Floating Button start --}}
    <a href="https://wa.me/+6282334857609?text=Hello,%20I'm%20interested%20in%20your%20trip%20packages%2C%20especially%20those%20visiting%20Ijen%20Crater%2C%20Sendang%20Seruni%2C%20and%20Taman%20Gandrung%20Terakota.%20Could%20you%20please%20provide%20more%20details?"
        class="btn btn-success btn-floating btn-wa-hover rounded-circle" target="_blank" style="height: 65px">
        <i class="fab fa-whatsapp fa-2xl m-2"></i>
    </a>
    {{-- Floating Button end --}}

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- Lightbox --}}
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

</body>

</html>
