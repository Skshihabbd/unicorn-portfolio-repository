<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- bootstrap cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nicedit/0.9/nicEditorIcons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- bootstrap cdn --}}
    <link rel="stylesheet" href="{{ asset('asset/style/dashboardnavbar.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/style/ourservice.css') }}">

    {{-- icon --}}
    <script src="https://kit.fontawesome.com/63e83a9841.js" crossorigin="anonymous"></script>
    {{-- icon --}}

    {{-- axios --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    {{-- axios --}}
<style>
    .navsm{
       display: none ;
    }

</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<body>
    <div class="dashboard-mainlg dashboard-main">

        <div id="sidebar-menu" class="navbarsm   navbarxs navbarmd navbarlg nav-div-main transition-all">
            <div class="burger-div-sidebarmd  burger-div-sidebarsm burger-div-sidebarxs">
                <button onclick="burgerHide()" class="burger-button">
                    <img width="40px" src="{{ asset('asset/logo/arrow_6353341.png') }}" alt="" srcset="">
                </button>
            </div>

                @include('dashboard.component.dashboardnavbar')



        </div>
        <div class="dashboard">
            <div class="burger-show-div">
                <button onclick="burgerShow()" class="burger-button burger-div-button">
                    <img width="40px" src="{{ asset('asset/logo/list_12713145.png') }}" alt="" srcset="">
                </button>
            </div>
            @yield('dashboard')
        </div>

    </div>

    @yield('script')

    <script src="{{ asset('asset/script_file/dashboardnavbar.js') }}"></script>
</body>

</html>
