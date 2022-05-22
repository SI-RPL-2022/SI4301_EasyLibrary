<!-- Navbar User -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/img/logo-easylibs.svg" alt="" width="131" height="47">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/katalogBuku">Katalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Layanan</a>
                </li>
            </ul>

            @guest
            <form class="d-flex">
                <a href="/login" class="btn" style="color: #16AAFF;">Login</a>
                <a href="/register" class="btn btn-primary">Register</a>
            </form>
            @endguest
            @auth
            <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll me-5">
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbar-list-4">
                    <ul>
                        <li class="notif">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bell-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                            </svg>
                        </li>
                    </ul>
                </div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrolling" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::user()->nama_depan}}
                        <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg"
                            width="25" height="25" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarScrolling">
                        <li><a class="dropdown-item" href="/profil">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/peminjamanBuku">Riwayat Peminjaman </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/logout">Logout </a></li>
                    </ul>
                </li>
            </ul>
            @endauth

        </div>
    </div>
</nav>
