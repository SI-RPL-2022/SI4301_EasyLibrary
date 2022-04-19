<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }} ">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>{{$title}}</title>
</head>

<body style="background-color: #ddd;">

    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="#"><img src="/img/logo-easylib.png" alt="" width="131" height="47"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link mx-5" href="#"><i class="bi bi-border-width"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-search"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown d-flex">
                        <div class="img">
                            <img src="{{ asset('/img/admin-logo.png') }}" alt="">
                        </div>
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        </a>
                        <div class="col">
                            <p class="m-0 text-muted">Halo, Cici</p>
                            <p class="m-0 fw-light">Administrator</p>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        <div class="col-md-3 min-vh-100 bg-white my-3 px-5 py-3">
            <h6 class="text-primary">Menu</h6>
            <ul class="sidebar list-unstyled mb-3">
                <li class="sidebar-item px-4 py-2 {{ ($title === "Dashboard") ? 'active' : '' }}">
                    <a href="#" class="sidebar-link {{ ($title === "Dashboard") ? 'active' : '' }}"><i class="bi bi-window-sidebar"></i> Dashboard</a>
                </li>
                <li class="sidebar-item px-4 py-2 {{ ($title === "Input Buku") ? 'active' : '' }}">
                    <a href="/inputBuku" class="sidebar-link {{ ($title === "Input Buku") ? 'active' : '' }}"><i class="bi bi-briefcase"></i> Input Buku</a>
                </li>
                <li class="sidebar-item px-4 py-2 {{ ($title === "Peminjaman Buku") ? 'active' : '' }}">
                    <a href="#" class="sidebar-link {{ ($title === "Peminjaman Buku") ? 'active' : '' }}"><i class="bi bi-box-seam"></i> Peminjaman Buku</a>
                </li>
                <li class="sidebar-item  px-4 py-2 {{ ($title === "Pengembalian Buku") ? 'active' : '' }}">
                    <a href="/pengembalianBuku" class="sidebar-link  {{ ($title === "Pengembalian Buku") ? 'active' : '' }}"><i class="bi bi-arrow-left-right"></i> Pengembalian Buku</a>
                </li>
            </ul>

            <h6 class="text-primary">Data</h6>
            <ul class="sidebar list-unstyled mb-3">
                <li class="sidebar-item px-4 py-2">
                    <a href="#" class="sidebar-link"><i class="bi bi-hdd-stack"></i> Data Rak</a>
                </li>
                <li class="sidebar-item px-4 py-2">
                    <a href="#" class="sidebar-link"><i class="bi bi-people"></i> Data User</a>
                </li>
                <li class="sidebar-item px-4 py-2">
                    <a href="#" class="sidebar-link"><i class="bi bi-tv"></i> Data Buku</a>
                </li>
            </ul>

            <h6 class="text-primary">Setting</h6>
            <ul class="sidebar list-unstyled mb-3">
                <li class="sidebar-item px-4 py-2 {{ ($title === "Profil") ? 'active' : '' }}">
                    <a href="/profilAdmin" class="sidebar-link {{ ($title === "Profil") ? 'active' : '' }}"><i class="bi bi-person"></i> Profile Admin</a>
                </li>
            </ul>
        </div>
        
        <div class="col-md-9">
            <div class="mx-4 min-vh-100">
            
                @yield('content')

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
