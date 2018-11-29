<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fizkantinz</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}" defer></script>    

    <!-- DATEPICKER PLUGIN -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">    

    <!-- ICON -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.4.2-web/css/all.css') }}">
    <link rel="icon" href="{{ asset('img/icon.png') }}">
</head>
<body>
    <div id="app">
        <nav class="sidenav" id="sidenav-respons">
            <div class="header brand text-align-center">
                <i class="fas fa-cookie-bite h1"></i>
                <p class="h3">Fizkantinz</p>
            </div>
            <div class="menu">
                <a href="{{ url('./') }}" class="child-menu"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                <a href="{{ url('laporan') }}" class="child-menu"><i class="fas fa-swatchbook"></i> Laporan</a>
                <a href="#" class="child-menu" onclick="dropdown()"><i class="fas fa-chart-bar"></i> Master Pendidikan</a>
                <div id="child-dropdown" class="child-dropdown hide">
                    <a href="{{ url('jurusan') }}" class="child-menu dropdown">Master Jurusan</a>
                    <a href="{{ url('kelas') }}" class="child-menu dropdown">Master Kelas</a>
                    <a href="{{ url('siswa') }}" class="child-menu dropdown">Master Siswa</a>
                </div>
                <a href="{{ url('toko') }}" class="child-menu"><i class="fas fa-store-alt"></i> Master Toko</a>
            </div>
        </nav>
        <nav class="topnav">
            <a href="./" class="bars h4" style="margin-left: 15px;"><img src="{{ asset('img/logo.png') }}" style="width: 80px;"></a>
            <div style="display: flex;">
                <button style="background-color: #38c172;color: #fff;" class="bars" onclick="sidenav()"><i class="fas fa-list"></i> Menu</button>
                <button style="background-color: #43baff;color: #fff;">{{ Auth::user()->name }}</button>
                <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i> Keluar</button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </nav>
        <main class="py-4">
            <div class="content">
                @yield('content')
            </div>
        </main>
    </div>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
