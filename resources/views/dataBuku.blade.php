@extends('layouts.admin_layout')

@section('content')
    <!-- bagian kanan -->
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="bi bi-book icon-gradient bg-happy-itmeo"></i>
                        </div>
                        <div><b>Data Buku</b>
                            <div class="page-title-subheading">Edit dan Hapus Data Buku Di Halaman Ini
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
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Peminjaman</div>
                                <div class="widget-subheading">Jumlah Buku yang di pijam</div>
                            </div>
                            <div class="widget-content-right">
                                <!-- isian untuk jumlahnya (php) -->
                                <div class="widget-numbers text-white"><span>1896</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Pengembalian</div>
                                <div class="widget-subheading">Jumlah Buku yang di kembalikan</div>
                            </div>
                            <div class="widget-content-right">
                                <!-- isian unttuk jumlahnya (php) -->
                                <div class="widget-numbers text-white"><span>568</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card -->
                <!-- card Donasi -->
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Donasi Buku</h5>
                            <p>Masukkan data yang di butuuhkan untuk melakukan donasi buku, pastikan perhatikan
                                inputan barang dengan teliti sebelum di submit.</p>
                            <p>Terima kasih</p>
                            <hr>
                            <div style="text-align: right;">
                                <a href="/donasiBuku" class="btn btn-primary">input</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- card tambah Buku -->
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Buku</h5>
                            <p>Masukkan data yang di butuuhkan untuk melakukan Tambah buku, pastikan perhatikan
                                inputan barang dengan teliti sebelum di submit.</p>
                            <p>Terima kasih</p>
                            <hr>
                            <div style="text-align: right;">
                                <a href="/donasiBuku" class="btn btn-primary">input</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- akhir card -->

                <!-- awal tabel -->
                <div class="col-lg-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Data Buku</h5>
                            <table class="mb-0 table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID Buku</th>
                                        <th>Judul Buku</th>
                                        <th>Rak</th>
                                        <th>Status Buku</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $buku )
                                        
                                    
                                    <tr>
                                        <td scope="row">{{$nomor++}}</td>
                                        <td>{{$buku->id_card}}</td>
                                        <td>{{$buku->judul}}</td>
                                        <td>{{$buku->id_rak}}</td>
                                        <td><b>{{$buku->status}}</b></td>

                                        <th>
                                            <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
                                                data-target=".bd-example-modal-lg">Ubah</button>
                                            <button type="button" class="btn mr-2 mb-2 btn-danger" data-toggle="modal"
                                                data-target="#exampleModal">Delete</button>
                                        </th>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- akhir tabel -->
            </div>
            <!-- akhir card -->
            <!-- akhir konten  -->
            <!-- done selesai -->

        </div>
    </div>
@endsection
