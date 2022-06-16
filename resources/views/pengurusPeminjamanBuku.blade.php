@extends('layouts.admin_layout')

@section('content')
    <!-- bagian kanan -->
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <span><i class="metismenu-icon bi bi-arrow-right"></i></span>
                        </div>
                        <div>Peminjaman Buku
                            <div class="page-title-subheading">Mengelola Peminjaman buku untuk Perpustakaan
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <div class="d-inline-block dropdown">
                            <button type="button" data-toggle="button" aria-haspopup="true" aria-expanded="false"
                                class="btn-shadow btn-toggle btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                </span>
                                Kembali
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
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
            <h5><b>Masukkan ID Card Buku</b></h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <!-- baris 1 -->
                            <div class="form-row">
                                <div class="col-md-11">
                                    <div class="input-group mb-2 d-flex align-content-around flex-wrap">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="bi bi-credit-card-fill"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                            placeholder="Masukkan ID Card">
                                    </div>
                                </div>
                                <div style="text-align: right;">
                                    <button class="btn btn-primary">Enter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir input -->

        <!-- awal tabel -->

        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Data Peminjaman Buku</h5>
                    <div class="d-flex">
                        <!-- awal filter -->
                        <!-- 1 -->
                        <div class="dropdown mb-3 ml-3 mr-3">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Waktu Peminjaman
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">07 Februari 2022</a>
                                <a class="dropdown-item" href="#">19 Februari 2022</a>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="dropdown mb-3 mr-3">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Waktu Pengembalian
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">14 Februari 2022</a>
                                <a class="dropdown-item" href="#">25 Februari 2022</a>
                            </div>
                        </div>
                        <!-- 4 -->
                        <div class="dropdown mb-3 mr-2">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Status Peminjaman
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Terlambat</a>
                                <a class="dropdown-item" href="#">Sisa 3 hari</a>
                                <a class="dropdown-item" href="#">Tepat Waktu</a>
                            </div>
                        </div>
                        <div class="col-2 mb-3 mr-3">
                            <form class="d-flex justify-content-end">
                                <input class="form-control me-2" type="search" placeholder="Cari Judul Buku"
                                    aria-label="Cari">
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </form>
                        </div>
                    </div>
                    <!-- akhir tabel -->
                    <table class="mb-0 table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Buku</th>
                                <th>ID Peminjam</th>
                                <th>Waktu Peminjaman</th>
                                <th>Waktu Pengembalian</th>
                                <th>Status Peminjaman</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($pinjam as $data )
                                <th scope="row"><?php echo $i++; ?></th>
                                <td>{{$data->buku->judul}}</td>
                                <td>{{$data->id_user}}</td>
                                <td>{{$data->tanggal_pinjam}}</td>
                                <td>{{$data->tanggal_kembali}}</td>

                                <th>
                                    <button type="button" class="btn mr-2 mb-2 btn-info" data-toggle="modal"
                                        data-target=".bd-example-modal-lg-detail">Status Peminjaman</button>
                                </th>
                                <th>
                                    <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
                                        data-target=".bd-example-modal-lg">
                                        <span><i class="bi bi-eye"></i></span>
                                        Aksi</button>
                                </th>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- akhir tabel -->
        <!-- akhir konten  -->
        <!-- akhir dari konten  (semua sudah auto padding jadinya ya) -->
    </div>

    </div>
@endsection