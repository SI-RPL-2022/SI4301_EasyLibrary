@extends('layouts.admin_layout')

@section('content')
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
                                <div class="widget-numbers text-white"><span>{{ $pinjam->count() }}</span></div>
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
                                <div class="widget-numbers text-white"><span>{{ $kembali->count() }}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir dari card informasi peminjaman dan pengembalian -->

            <!-- awal chart -->
            <div class="row">
                <div class="col-md-6 col-xl-6">
                        <a href="/report">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Data Peminjaman/Bulan</h5>
                                <canvas id="canvas"></canvas>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- <div class="col-md-6 col-xl-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                                <h5 class="card-title">Vertical Bars</h5>
                                <canvas id="canvas"></canvas>
                        </div>
                    </div>
                </div> --}}
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
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($pinjam as $data)
                                    @php
                                        $masa = \Carbon\Carbon::parse($data->tanggal_kembali)->diff(\Carbon\Carbon::now())->d;
                                        $minus = null;
                                        if (\Carbon\Carbon::now() >= \Carbon\Carbon::parse($data->tanggal_kembali)) {
                                            $minus = 'Minus';
                                        }
                                    @endphp

                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $data->buku->judul }}</td>
                                        <td>{{ $data->user->nama_depan . ' ' . $data->user->nama_belakang }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->tanggal_pinjam)->format('j F Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->tanggal_kembali)->format('j F Y') }}</td>
                                        <td>
                                            @if ($data->status == 'Dikembalikan')
                                                @if ($minus == 'Minus')
                                                    <a href="#!" class="btn btn-warning">Dikembalikan Terlambat
                                                        {{ $masa }}
                                                        hari</a>
                                                @else
                                                    <a href="#!" class="btn btn-info">Dikembalikan Tersisa
                                                        {{ $masa }}
                                                        hari</a>
                                                @endif
                                            @else
                                                @if ($minus == 'Minus')
                                                    <a href="#!" class="btn btn-danger">Terlambat {{ $masa }}
                                                        hari</a>
                                                @else
                                                    <a href="#!" class="btn btn-success">Tersisa {{ $masa }}
                                                        hari</a>
                                                @endif
                                            @endif
                                        </td>
                                        <th>
                                            <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
                                                data-target="#detailData{{ $data->id }}">Details</button>

                                        </th>
                                    </tr>
                                @endforeach
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

    @foreach ($pinjam as $data)
        <div class="modal fade bd-example-modal-lg" id="detailData{{ $data->id }}" tabindex="1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true" style="padding-top: 100px;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Detail Peminjaman</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- input di modal -->
                        <div class="row">
                            <div class="col">
                                <label class="fw-bold" for="nama">Nama Peminjam</label>
                                <p class="ps-5"><i class="bi bi-person-fill"></i>
                                    {{ $data->user->nama_depan . ' ' . $data->user->nama_belakang }}</p>
                            </div>
                            <div class="col">
                                <label class="fw-bold" for="judul">Judul Buku yang Dipinjam</label>
                                <p class="ps-5"><i class="bi bi-book"></i> {{ $data->buku->judul }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="tanggal_pinjam" class="fw-bold">Tanggal Pinjam</label>
                                <p class="ps-5"><i class="bi bi-calendar-week"></i>
                                    {{ \Carbon\Carbon::parse($data->tanggal_pinjam)->format('j F Y') }}</p>
                            </div>
                            <div class="col">
                                <label for="tanggal_kembali" class="fw-bold">Tanggal Pinjam</label>
                                <p class="ps-5"><i class="bi bi-calendar-week"></i>
                                    {{ \Carbon\Carbon::parse($data->tanggal_kembali)->format('j F Y') }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="status" class="fw-bold">Status Peminjaman</label>
                                <p class="ps-5"><i class="bi bi-dash-circle-fill"></i> {{ $data->status }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
