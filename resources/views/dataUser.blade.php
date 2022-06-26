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
                        <div>Data User
                            <div class="page-title-subheading">Melihat dan Mengedit Data User
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
                <!-- awal tabel -->
                <div class="col-lg-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Data User</h5>
                            <!-- filter -->
                            <div class="d-flex">
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


                            <!-- akhir filter -->
                            <table class="mb-0 table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jumlah Donasi</th>
                                        <th>ID CARD</th>
                                        <th>Bukti</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $data)
                                        @php
                                            $buku = App\Models\DataBuku::where('user_id', '=', $data->id)->get();
                                            $hitung = $buku->count();
                                        @endphp

                                        <tr>
                                            <th scope="row"></th>
                                            <td>{{ $data->nama_depan . ' ' . $data->nama_belakang }}</td>
                                            <td>{{ $hitung }}</td>
                                            <td>{{ $data->id_card }}</td>
                                            <td><a href="/download/kyc/{{ $data->id }}"><i class="bi bi-eye-fill"></i>
                                                    Lihat Bukti</a></td>
                                            <th>
                                                <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
                                                    data-target="#detailData{{ $data->id }}">Detail</button>
                                                <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
                                                    data-target="#editData{{ $data->id }}">Ubah</button>
                                            </th>
                                        </tr>
                                    @endforeach
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
            <!-- akhir konten  -->
            <!-- akhir dari konten  (semua sudah auto padding jadinya ya) -->
        </div>

    </div>

    <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
    </div>
    </div>

    @foreach ($user as $data)
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
                                <div class="card mb-4" style="height: 180px; width: 180px; ">
                                    @if (auth()->user()->foto == null)
                                        <img src="{{ asset('img/default_profile.png') }}" alt="" id="prev"
                                            style="max-height: 180px; object-fit:cover ">
                                    @else
                                        <img src="{{ asset('storage/' . auth()->user()->foto) }}" alt=""
                                            id="prev" style="max-height: 180px; object-fit:cover ">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="fw-bold" for="nama">Nama Depan</label>
                                <p class="ps-5"></i>
                                    {{ $data->nama_depan }}</p>
                            </div>
                            <div class="col">
                                <label class="fw-bold" for="judul">Nama Belakang</label>
                                <p class="ps-5"> {{ $data->nama_belakang }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="fw-bold" for="nama">ID Card</label>
                                <p class="ps-5"></i>
                                    {{ $data->id_card }}</p>
                            </div>
                            <div class="col">
                                <label class="fw-bold" for="judul">email</label>
                                <p class="ps-5"> {{ $data->email }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="fw-bold" for="nama">Alamat</label>
                                <p class="ps-5"></i>
                                    {{ $data->alamat }}</p>
                            </div>
                            <div class="col">
                                <label class="fw-bold" for="judul">No Handphone</label>
                                <p class="ps-5"> {{ $data->no_handphone }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="fw-bold" for="nama">Negara</label>
                                <p class="ps-5"></i>
                                    {{ $data->negara }}</p>
                            </div>
                            <div class="col">
                                <label class="fw-bold" for="judul">Provinsi</label>
                                <p class="ps-5"> {{ $data->provinsi }}</p>
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

    @foreach ($user as $data)
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
                    <form action="/updateProfil/{{ $data->id }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <!-- input di modal -->
                            <div class="row">
                                <div class="col">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="namaDepan" class="form-label"><b>Nama Depan</b></label>
                                        <input type="name" class="form-control" name="namaDepan" aria-describedby="#"
                                            value="{{ $data->nama_depan }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="namaBelakang" class="form-label"><b>Nama Belakang</b></label>
                                        <input type="name" class="form-control" name="namaBelakang"
                                            aria-describedby="#" value="{{ $data->nama_belakang }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label"><b>Alamat</b></label>
                                        <input type="address" class="form-control" name="alamat" aria-describedby="#"
                                            value="{{ $data->alamat }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="negara" class="form-label"><b>Negara</b></label>
                                        <input type="name" class="form-control" name="negara" aria-describedby="#"
                                            value="{{ $data->negara }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label"><b>ID Card</b></label>
                                        <input type="number" class="form-control" name="id_card" aria-describedby="#"
                                            value="{{ $data->id_card }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label"><b>Email</b></label>
                                        <input type="email" class="form-control" name="email" aria-describedby="#"
                                            value="{{ $data->email }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nomorHP" class="form-label"><b>Nomor Handphone</b></label>
                                        <input type="number" class="form-control" name="nomorHP" aria-describedby="#"
                                            value="{{ $data->no_handphone }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="provinsi" class="form-label"><b>Provinsi</b></label>
                                        <input type="text" class="form-control" name="provinsi" aria-describedby="#"
                                            value="{{ $data->provinsi }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
