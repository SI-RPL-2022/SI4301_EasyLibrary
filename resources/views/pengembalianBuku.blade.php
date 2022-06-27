@extends('layouts.admin_layout')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                            </i>
                        </div>
                        <div>Data Pengembalian
                            <div class="page-title-subheading">Kelola Penyimpanan Buku
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
            <h4>Masukkan ID Peminjaman</h4>

            <form action="/input/pengembalian" method="post">
                @csrf
                <div class="row my-4">
                    <div class="col-md-10">
                        <input type="text" name="peminjaman_id" id="peminjaman_id" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary w-100">Enter</button>
                    </div>
                </div>
            </form>

            <div class="bg-white p-3">
                <h5>Riwayat Pengembalian</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID Peminjaman</th>
                            <th>ID Buku</th>
                            <th>Nama Peminjam</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Tanggal Dikembalikan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <!-- DONE -->
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($pinjam as $data)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->peminjaman_id }}</td>
                                <td>{{ $data->buku->judul }}</td>
                                <td>{{ $data->user->nama_depan . ' ' . $data->user->nama_belakang }}</td>
                                <td>{{ \Carbon\Carbon::parse($data->tanggal_pinjam)->format('j F Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($data->tanggal_kembali)->format('j F Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($data->tanggal_real_kembali)->format('j F Y') }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#detailData{{ $data->id }}">Sudah Dikembalikan</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- akhir konten  -->
            <!-- akhir dari konten  (semua sudah auto padding jadinya ya) -->
        </div>

    </div>
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
