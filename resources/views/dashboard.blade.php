<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard Easy Lib</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css'); }} ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <!-- logo navbar kiri atas  -->
                <div class=""> <img src="assets/images/logoeasylib.png" alt="" style="width: 120px;"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg"
                                                alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User
                                                Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Alina Mclourd
                                    </div>
                                    <div class="widget-subheading">
                                        Admin
                                    </div>
                                </div>
                                <!-- akhir navbar edit -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <!-- side bar di mulai dari sini -->
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Menu</li>
                            <li>
                                <a href="index.html" class="mm-active">
                                    <i class="metismenu-icon bi bi-house"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="index.html" class="mm">
                                    <i class="metismenu-icon bi bi-book"></i>
                                    Donasi Buku
                                </a>
                            </li>
                            <li>
                                <a href="index.html" class="mm">
                                    <i class="metismenu-icon bi bi-arrow-right"></i>
                                    Peminjaman Buku
                                </a>
                            </li>
                            <li>
                                <a href="index.html" class="mm">
                                    <i class="metismenu-icon bi bi-arrow-left-right"></i>
                                    Pengembalian Buku
                                </a>
                            </li>
                            <!-- pemisah menu dengan Data -->
                            <li class="app-sidebar__heading">DATA</li>
                            <li>
                                <a href="index.html" class="mm">
                                    <i class="metismenu-icon bi bi-hdd-rack "></i>
                                    Data Rak
                                </a>
                            </li>
                            <li>
                                <a href="index.html" class="mm">
                                    <i class="metismenu-icon bi bi-people"></i>
                                    Data User
                                </a>
                            </li>
                            <li>
                                <a href="index.html" class="mm">
                                    <i class="metismenu-icon bi bi-journals"></i>
                                    Data Buku
                                </a>
                            </li>
                            <!-- pemisah data dengan profile -->
                            <li class="app-sidebar__heading">SETTINGS</li>
                            <li>
                                <a href="index.html" class="mm">
                                    <i class="metismenu-icon bi bi-person"></i>
                                    Profile Admin
                                </a>
                            </li>
                            <!-- akhir edit -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- bagian kanan -->
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                                    </i>
                                </div>
                                <div>Dashboard
                                    <div class="page-title-subheading">Kelola Perpustakaan Wilayah
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="button" aria-haspopup="true"
                                        aria-expanded="false" class="btn-shadow btn-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                        </span>
                                        Kembali
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                        class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span>
                                                        Inbox
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span>
                                                        Book
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-picture"></i>
                                                    <span>
                                                        Picture
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                    <i class="nav-link-icon lnr-file-empty"></i>
                                                    <span>
                                                        File Disabled
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- untuk konten atau isian lainnya di mulai dari sini sampai tanda akhir konten ya -->
                    <!-- awal konten -->
                    <!-- card total peminjaman dan total pengembalian -->
                    <div class="row">
                        <div class="col-md-6 col-xl-6">
                            <div class="card mb-3 widget-content bg-midnight-bloom">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Total Peminjaman</div>
                                        <div class="widget-subheading">Jumlah Barang dipinjam</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>298</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-6">
                            <div class="card mb-3 widget-content bg-arielle-smile">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Total Pengembalian</div>
                                        <div class="widget-subheading">Jumlah buku dikembalikan</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>180</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir dari card informasi peminjaman dan pengembalian -->

                    <!-- awal chart -->
                    <div class="row">
                        <div class="col-md-6 col-xl-6">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Vertical Bars</h5>
                                    <canvas id="canvas"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-6">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Pie Chart</h5>
                                    <canvas id="chart-area"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- akhir chart -->

                    <!-- awal tabel -->
                    <div class="col-lg-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Daftar Peminjaman BUku</h5>
                                <table class="mb-0 table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Nama Peminjaman</th>
                                            <th>WaktU Peminjaman</th>
                                            <th>Waktu Pengembalian</th>
                                            <th>Status Peminjaman</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Buku A</td>
                                            <td>Wade Warren</td>
                                            <td>07 Feb 2022</td>
                                            <td>08 Feb 2022</td>
                                            <td>Sisa 2 Hari</td>
                                            <th>
                                                <button type="button" class="btn mr-2 mb-2 btn-primary"
                                                    data-toggle="modal"
                                                    data-target=".bd-example-modal-lg">Details</button>
                                                
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- akhri tabel -->

                    <!-- akhir konten  -->
                    <!-- akhir dari konten  (semua sudah auto padding jadinya ya) -->
                </div>

            </div>

            <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    <script src="{{  URL::asset('js/main.js')}}"></script>
</body>

</html>