<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('layout/css/bootstrap.min.css') }}" rel="stylesheet">

    <title>Official Web IKA-SMKN 4 Gorontalo</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href=""><img src="{{ asset('layout/img/smkn4.png') }}"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tentang
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Kepengurusan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Agenda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>





    @yield('konten')
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('layout/js/bootstrap.bundle.min.js') }}">
    </script>
</body>

</html>
