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
                                        $buku = App\Models\DataBuku::where('user_id','=',$data->id)->get();
                                        $hitung = $buku->count();
                                    @endphp

                                    <tr>
                                        <th scope="row"></th>
                                        <td>{{$data->nama_depan .' '. $data->nama_belakang}}</td>
                                        <td>{{$hitung}}</td>
                                        <td>{{$data->id_card}}</td>
                                        <td><a href="/download/kyc/{{ $data->id }}"><i class="bi bi-eye-fill"></i> Lihat Bukti</a></td>
                                        <th>
                                            <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
                                                data-target=".bd-example-modal-lg-detail">Detail</button>
                                            <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
                                                data-target=".bd-example-modal-lg">Ubah</button>
                                            <button type="button" class="btn mr-2 mb-2 btn-danger" data-toggle="modal"
                                                data-target="#exampleModal">Delete</button>
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
@endsection
