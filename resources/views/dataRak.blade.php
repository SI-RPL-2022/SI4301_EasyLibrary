<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Data Rak</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css'); }}">
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
                                <a href="index.html" class="mm">
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
                                <a href="index.html" class="mm-active">
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
                                <div>Data Rak
                                    <div class="page-title-subheading">Input, edit dan hapus data rak di halaman ini
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
                    <h5><b>Masukkan Data Rak</b></h5>
                    <br>
                    <!-- card input data rak -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <!-- form input -->
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationTooltip01">Nomor Rak</label>
                                            <input type="text" class="form-control" id="validationTooltip01"
                                                placeholder="Masukkan Nomor Rak : A1" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationTooltip02">Kapasitas Loker</label>
                                            <input type="text" class="form-control" id="validationTooltip02"
                                                placeholder="Masukkan Kapasitas Loker" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <!-- baris 2 (harusnya dropdown) -->
                                    <div class="form-row">
                                        <!-- <div class="col-md-6 mb-3">
                                            <   label for="validationTooltip01">Nomor Rak</label>
                                            <input type="text" class="form-control" id="validationTooltip01"
                                                placeholder="Masukkan Judul Buku" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                        </div> -->
                                        <!-- dropdown -->
                                        <div class="col-md-6 mb-3 dropdown">
                                            <label>Jenis Buku</label>
                                            <br>
                                            <button type="button" aria-haspopup="true" aria-expanded="false"
                                                data-toggle="dropdown"
                                                class="col-md-12 pd-6 dropdown-toggle btn btn-outline-light"
                                                style="text-align:left; color: black;">Pilih
                                                Jenis
                                                buku</button>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                                <button type="button" tabindex="0" class="dropdown-item">Fiksi</button>
                                                <button type="button" tabindex="0" class="dropdown-item">Ilmiah</button>
                                                <button type="button" tabindex="0" class="dropdown-item">
                                                    Lainnya</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- akhir form input -->
                                    <div style="text-align: right;">
                                        <button class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- awal tabel -->
                        <div class="col-lg-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Data Buku</h5>
                                    <!-- filter -->
                                    <div class="row">
                                        <div class="dropdown mb-3 ml-3 mr-3">
                                            <button class="btn btn-light dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                10
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">10</a>
                                                <a class="dropdown-item" href="#">15</a>
                                                <a class="dropdown-item" href="#">20</a>
                                            </div>
                                        </div>
                                        <!-- 2 -->
                                        <div class="dropdown mb-3 mr-3">
                                            <button class="btn btn-light dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Normor Loker
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">A-Z</a>
                                                <a class="dropdown-item" href="#">Z-A</a>
                                            </div>
                                        </div>
                                        <!-- 3 -->
                                        <div class="dropdown mb-3 mr-3">
                                            <button class="btn btn-light dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Kapasitas
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Terbanyak</a>
                                                <a class="dropdown-item" href="#">Terkecil</a>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- akhir filter -->
                                    <table class="mb-0 table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nomor Loker</th>
                                                <th>Kapasitas</th>
                                                <th>Jenis Buku</th>
                                                <th>Sisa Ruang</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>12</td>
                                                <td>25 Buku</td>
                                                <td>Buku/jurna/DLL</td>
                                                <td>3</td>
                                                <th>
                                                    <button type="button" class="btn mr-2 mb-2 btn-primary"
                                                        data-toggle="modal"
                                                        data-target=".bd-example-modal-lg-detail">Detail</button>
                                                    <button type="button" class="btn mr-2 mb-2 btn-primary"
                                                        data-toggle="modal"
                                                        data-target=".bd-example-modal-lg">Ubah</button>
                                                    <button type="button" class="btn mr-2 mb-2 btn-danger"
                                                        data-toggle="modal" data-target="#exampleModal">Delete</button>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination mt-3">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- akhir tabel -->
                    </div>
                    <!-- akhir input ddata rak -->
                    <!-- akhir konten  -->
                    <!-- akhir dari konten  (semua sudah auto padding jadinya ya) -->
                </div>

            </div>

            <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>

    <!-- modal -->
    <div class="modal fade bd-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="padding-top: 100px;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Rak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- input di modal -->
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Nomor Rak</label>
                                <input type="text" class="form-control" id="validationTooltip01"
                                    placeholder="Masukkan Nomor Rak" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip02">Kapasitas Loker</label>
                                <input type="text" class="form-control" id="validationTooltip02"
                                    placeholder="Masukkan Kapasitas Loker" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <!-- dropdown -->
                            <div class="col-md-6 mb-3 dropdown">
                                <label>Jenis Buku</label>
                                <br>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                                    class="col-md-12 pd-6 dropdown-toggle btn btn-outline-light"
                                    style="text-align:left; color: black;">Pilih
                                    Jenis
                                    buku</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Fiksi</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Ilmiah</button>
                                    <button type="button" tabindex="0" class="dropdown-item">
                                        Lainnya</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modar untuk delete data buku -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" style="padding-top: 100px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah yakin ingi menghapus data Rak tersebut?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal untuk detail data buku -->
    <div class="modal fade bd-example-modal-lg-detail" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="padding-top: 100px;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Data Rak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- input di modal -->
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Nomor Rak</label>
                                <input type="text" class="form-control" id="validationTooltip01"
                                    placeholder="A1 (di get dari input)" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip02">Kapasitas Loker</label>
                                <input type="text" class="form-control" id="validationTooltip02"
                                    placeholder="25 (di get dari Input)" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <!-- untuk pengganti dropdown -->
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip02">Jenis Buku</label>
                                <input type="text" class="form-control" id="validationTooltip02"
                                    placeholder="Jurnal (di get dari Input)" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <!-- untuk sisa ruang -->
                            <div class="col">
                                <label for="validationTooltip02">Sisa Ruang</label><br>
                                <button class="btn btn-primary">10 (di get dari input - buku yang
                                    tambah)</button>
                            </div>

                            <!-- dropdown -->
                            <!-- <div class="col-md-6 mb-3 dropdown">
                                <label>Jenis Buku</label>
                                <br>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                                    class="col-md-12 pd-6 dropdown-toggle btn btn-outline-light"
                                    style="text-align:left; color: black;">Pilih
                                    Jenis
                                    buku</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">Fiksi</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Ilmiah</button>
                                    <button type="button" tabindex="0" class="dropdown-item">
                                        Lainnya</button>
                                </div>
                            </div> -->
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir modal -->
    <!-- akhir modal -->
</body>

</html>