@extends('layouts.admin_layout')

@section('content')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="bi bi-briefcase icon-gradient bg-happy-itmeo">
                        </i>
                    </div>
                    <div>Input Buku
                        <div class="page-title-subheading">Kelola Donasi Buku untuk perpustakaan
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
        <h5><b>Masukkan Data Buku</b></h5>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <!-- baris 1 -->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">ID Card</label>
                                <input type="text" class="form-control" id="validationTooltip01"
                                    placeholder="Masukkan ID Card" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip02">Tahun terbit</label>
                                <input type="text" class="form-control" id="validationTooltip02"
                                    placeholder="Masukkan Tahun Terbit" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <!-- baris 2 -->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Judul Buku</label>
                                <input type="text" class="form-control" id="validationTooltip01"
                                    placeholder="Masukkan Judul Buku" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <!-- masukkan status barang harus nya dropdown -->
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip02">Status Buku</label>
                                <input type="text" class="form-control" id="validationTooltip02"
                                    placeholder="Status Buku (dropdown)" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <!-- baris 3 -->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Pengarang</label>
                                <input type="text" class="form-control" id="validationTooltip01"
                                    placeholder="Masukkan Nama Pengarang" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <!-- input foto -->
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip02">Masukkan Foto Buku</label>
                                <input type="file" class="form-control" id="validationTooltip02"
                                    placeholder="Pilih Foto Buku" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <!-- Baris 4 -->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Penerbit</label>
                                <input type="text" class="form-control" id="validationTooltip01"
                                    placeholder="Masukkan Nama Penerbit" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <!-- Jenis Rak Dropdown -->
                            <div class="col-md-6 mb-3 dropdown">
                                <label>Jenis Rak</label>
                                <br>
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                                    class="col-md-12 pd-6 pb-2 pt-2 dropdown-toggle btn btn-outline-light"
                                    style="text-align:left; color: black;">Pilih Rak</button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                    <button type="button" tabindex="0" class="dropdown-item">A1</button>
                                    <button type="button" tabindex="0" class="dropdown-item">A2</button>
                                    <button type="button" tabindex="0" class="dropdown-item">
                                        Di get dari input</button>
                                </div>
                            </div>
                            <!--  akhri dropdown rak -->
                            <!-- <div class="col-md-6 mb-3">
                                            <label for="validationTooltip02">Pilih Rak</label>
                                            <input type="text" class="form-control" id="validationTooltip02"
                                                placeholder="Pilih Rak input" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                        </div> -->
                        </div>
                        <hr>
                        <div style="text-align: right;">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir input -->

        <!-- awal tabel -->
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Data Donasi Buku</h5>
                        <div class="row">
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
                                    Normor Loker
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">A-Z</a>
                                    <a class="dropdown-item" href="#">Z-A</a>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="dropdown mb-3 mr-3">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kapasitas
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Terbanyak</a>
                                    <a class="dropdown-item" href="#">Terkecil</a>
                                </div>
                            </div>
                        </div>
                        <!-- akhir tabel -->
                        <table class="mb-0 table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID Buku</th>
                                    <th>Nama Buku</th>
                                    <th>Rak</th>
                                    <th>Status Barang</th>

                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>121213</td>
                                    <td>Think Grow Rich</td>
                                    <td>12</td>
                                    <td><b>DIPINJAM</b></td>

                                    <th>
                                        <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-lg-detail">Detail</button>
                                        <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-lg">Ubah</button>
                                        <button type="button" class="btn mr-2 mb-2 btn-danger" data-toggle="modal"
                                            data-target="#exampleModal">Delete</button>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir tabel -->
        <!-- akhir konten  -->
        <!-- akhir dari konten  (semua sudah auto padding jadinya ya) -->
    </div>

</div>
@endsection 
