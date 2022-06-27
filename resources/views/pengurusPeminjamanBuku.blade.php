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

                            <form action="/input/peminjaman" method="post">
                                @csrf
                                <!-- baris 1 -->
                                <div class="form-row">
                                    <div class="col">
                                        <label for="id_card" class="form-label">Masukkan ID Peminjam</label>
                                        <div class="input-group mb-2 d-flex align-content-around flex-wrap">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="bi bi-credit-card-fill"></i></div>
                                            </div>
                                            <input type="text" name="user_id" class="form-control"
                                                id="inlineFormInputGroup" list="datalistOptions" placeholder="Masukkan ID Card">
                                            <datalist id="datalistOptions">
                                                @foreach ($user as $data )
                                                    <option value="{{$data->id_card}}">
                                                @endforeach
                                            </datalist>
                                        </div>
                                        @if (session('user'))
                                            <p class="text-danger">ID user tidak terdaftar</p>
                                        @endif
                                    </div>
                                    <div class="col">
                                        <label for="id_card" class="form-label">ID Buku</label>
                                        <div class="input-group mb-2 d-flex align-content-around flex-wrap">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="bi bi-book-fill"></i></div>
                                            </div>
                                            <input type="text" name="buku_id" class="form-control"
                                                id="inlineFormInputGroup" list="datalistOptionsbuku" placeholder="Masukkan ID Buku">

                                                <datalist id="datalistOptionsbuku">
                                                    @foreach ($buku as $data )
                                                        <option value="{{$data->id_buku}}">
                                                    @endforeach
                                                </datalist>
                                        </div>
                                        @if (session('buku'))
                                            <p class="text-danger">ID buku tidak terdaftar</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="id_card" class="form-label">Tanggal Pinjam</label>
                                        <div class="input-group mb-2 d-flex align-content-around flex-wrap">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="bi bi-calendar-week"></i></div>
                                            </div>
                                            <input type="date" name="tanggal_pinjam" class="form-control"
                                                id="inlineFormInputGroup" placeholder="Masukkan ID Card">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="id_card" class="form-label">Tanggal Pengembalian</label>
                                        <div class="input-group mb-2 d-flex align-content-around flex-wrap">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="bi bi-calendar-week"></i></div>
                                            </div>
                                            <input type="date" name="tanggal_kembali" class="form-control"
                                                id="inlineFormInputGroup" placeholder="Masukkan ID Buku">
                                        </div>
                                    </div>
                                </div>
                                <div style="text-align: right;">
                                    <button type="submit" class="btn btn-primary">Enter</button>
                                </div>
                            </form>
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
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>ID Peminjaman</th>
                                <th>Judul Buku</th>
                                <th>Nama Peminjam</th>
                                <th>Waktu Peminjaman</th>
                                <th>Waktu Pengembalian</th>
                                <th>Status Peminjaman</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($pinjam as $data)
                                <tr>
                                    <th scope="row"><?php echo $i++; ?></th>
                                    <td>{{ $data->peminjaman_id }}</td>
                                    <td>{{ $data->buku->judul }}</td>
                                    <td>{{ $data->user->nama_depan . ' ' . $data->user->nama_belakang }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->tanggal_pinjam)->format('j F Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->tanggal_kembali)->format('j F Y') }}</td>

                                    <th class="text-center">
                                        @if ($data->status == 'Pending')
                                            <button class="btn btn-secondary">{{ $data->status }}</button>
                                        @endif

                                        @if ($data->status == 'Dipinjam')
                                            <button class="btn btn-success">{{ $data->status }}</button>
                                        @endif

                                    </th>
                                    <td>
                                        <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
                                            data-target="#detailData{{ $data->id }}">
                                            <span><i class="bi bi-eye"></i></span>
                                            Detail</button>

                                        <button type="button" class="btn mr-2 mb-2 btn-success" data-toggle="modal"
                                            data-target="#editData{{ $data->id }}">
                                            <span><i class="bi bi-box-arrow-in-down-left"></i></span>
                                            Edit</button>
                                    </td>
                                </tr>
                            @endforeach
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

    @foreach ($pinjam as $data)
        <div class="modal fade bd-example-modal-lg" id="editData{{ $data->id }}" tabindex="1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true" style="padding-top: 100px;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Detail Peminjaman</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/update/peminjaman/{{ $data->id }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <!-- input di modal -->
                            <div class="form-row">
                                <div class="col">
                                    <label for="id_card" class="form-label">Masukkan ID Peminjam</label>
                                    <div class="input-group mb-2 d-flex align-content-around flex-wrap">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="bi bi-credit-card-fill"></i></div>
                                        </div>
                                        <input type="text" name="user_id" class="form-control"
                                            id="inlineFormInputGroup" placeholder="Masukkan ID Card"
                                            value="{{ $data->user->id_card }}">
                                    </div>
                                    @if (session('user'))
                                        <p class="text-danger">ID user tidak terdaftar</p>
                                    @endif
                                </div>
                                <div class="col">
                                    <label for="id_card" class="form-label">ID Buku</label>
                                    <div class="input-group mb-2 d-flex align-content-around flex-wrap">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="bi bi-book-fill"></i></div>
                                        </div>
                                        <input type="text" name="buku_id" class="form-control"
                                            id="inlineFormInputGroup" placeholder="Masukkan ID Buku"
                                            value="{{ $data->buku->id_buku }}">
                                    </div>
                                    @if (session('buku'))
                                        <p class="text-danger">ID buku tidak terdaftar</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="id_card" class="form-label">Tanggal Pinjam</label>
                                    <div class="input-group mb-2 d-flex align-content-around flex-wrap">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="bi bi-calendar-week"></i></div>
                                        </div>
                                        <input type="date" name="tanggal_pinjam" class="form-control"
                                            id="inlineFormInputGroup" placeholder="Masukkan ID Card"
                                            value="{{ $data->tanggal_pinjam }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="id_card" class="form-label">Tanggal Pengembalian</label>
                                    <div class="input-group mb-2 d-flex align-content-around flex-wrap">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="bi bi-calendar-week"></i></div>
                                        </div>
                                        <input type="date" name="tanggal_kembali" class="form-control"
                                            id="inlineFormInputGroup" placeholder="Masukkan ID Buku"
                                            value="{{ $data->tanggal_kembali }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-select">
                                        <option value="Pending">Pending</option>
                                        <option value="Dipinjam">Dipinjam</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
