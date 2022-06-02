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
        <h4>Masukkan/Scan ID Buku</h4>
    <div class="row my-4">
        <div class="col-md-10">
            <input type="text" name="id_buku" id="id_buku" class="form-control">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100">Enter</button>
        </div>
    </div>

    <div class="bg-white p-3">
        <h5>Riwayat Pengembalian</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID Buku</th>
                    <th>Nama Peminjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Tanggal Dikembalikan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 10; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>SPIS-000000022</td>
                        <td>Felysia Inez Gianina</td>
                        <td>28 Feb 2022</td>
                        <td>1 Mar 2022</td>
                        <td>1 Mar 2022</td>
                        <td>
                            <p class="bg-success text-white p-1">Sudah Kembali</p>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
        <!-- akhir konten  -->
        <!-- akhir dari konten  (semua sudah auto padding jadinya ya) -->
    </div>

</div>


    
@endsection
