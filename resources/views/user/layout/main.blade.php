<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tamansari | {{ $title }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/logo-tamansari.png') }}" type="image/x-icon">

    {{-- CDN Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    {{-- CDN Google Web Fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- CDN Font Awesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    {{-- CDN Lightbox lightgallery.js --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery.js@1.4.0/dist/css/lightgallery.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lg-transitions.min.css" />

    {{-- font --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
    </style>

    {{-- custom css --}}
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

        #txt-dest-judul {
            font-family: "Rubik", sans-serif;
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
    @include('user.component.navbar')
    {{-- Navbar --}}

    {{-- Content --}}
    @yield('content')
    {{-- Content --}}

    {{-- Footer --}}
    @include('user.component.footer')
    {{-- Footer --}}

    {{-- Floating Button start --}}
    {{-- <a href="https://wa.me/+6282334857609?text=Permisi%20mau%20tanya"
        class="btn btn-success btn-floating btn-wa-hover rounded-circle" target="_blank" style="height: 65px">
        <i class="fab fa-whatsapp fa-2xl m-2"></i>
    </a> --}}
    {{-- Floating Button end --}}

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CDN Lightbox lightgallery.js -->
    <script src="https://cdn.jsdelivr.net/npm/lightgallery.js@1.4.0/dist/js/lightgallery.min.js"></script>

    <script>
        // gallery for destinations
        lightGallery(document.getElementById('gallery-dest'), {
            mode: 'lg-zoom-out',
        });

        // gallery for homestay
        lightGallery(document.getElementById('gallery-homestay-1'), {
            galleryId: 1,
            mode: 'lg-zoom-out',
        });
        lightGallery(document.getElementById('gallery-homestay-2'), {
            galleryId: 2,
            mode: 'lg-zoom-out',
        });
        lightGallery(document.getElementById('gallery-homestay-3'), {
            galleryId: 3,
            mode: 'lg-zoom-out',
        });
    </script>

    {{-- chatbase chatbot --}}
    <script>
        window.embeddedChatbotConfig = {
            chatbotId: "KHXcBw15L7HAG94j3LnV1",
            domain: "www.chatbase.co"
        }
    </script>
    <script src="https://www.chatbase.co/embed.min.js" chatbotId="KHXcBw15L7HAG94j3LnV1" domain="www.chatbase.co" defer></script>
</body>

</html>
