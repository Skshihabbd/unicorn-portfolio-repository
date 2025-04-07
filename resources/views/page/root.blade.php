<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <link rel="icon" type="image/svg+xml" href="{{ asset('asset/logo.png') }}">




    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Default title')</title>
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">

   @yield('tailwind')
    {{-- fontt --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75,300..800;1,75,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    {{-- fontt --}}

    {{-- icon --}}
    <script src="https://kit.fontawesome.com/63e83a9841.js" crossorigin="anonymous"></script>
    {{-- icon --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- animate css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- animate css --}}
    {{-- axios cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    {{-- axios cdn --}}

    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- sweet alert --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <style>
        /* Optional Custom Styling */
        .swiper {
            width: 100%;
            height: 300px;
        }

        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            background: #ddd;
        }





    </style>

</head>

<body class="">

    @include('component.header')
    @yield('layout')
    @include('component.footer')


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <script src="{{ asset('asset/script.js') }}"></script>





    <!-- ✅ Swiper JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



    <script src="{{ asset('asset/script_file/swiper.js') }}"></script>
    @yield('scripts')
</body>

</html>
