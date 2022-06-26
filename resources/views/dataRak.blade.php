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
                        <div>Data Rak
                            <div class="page-title-subheading">Input, edit dan hapus data rak di halaman ini
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
            <h5><b>Masukkan Data Rak</b></h5>
            <br>
            <!-- card input data rak -->
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <!-- form input -->
                            <form action="/dataRak/input" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip01">Nomor Rak</label>
                                        <input type="text" name="nomor" class="form-control" id="validationTooltip01"
                                            placeholder="Masukkan Nomor Rak : A1" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip02">Kapasitas Loker</label>
                                        <input type="number" name="kapasitas" class="form-control" id="validationTooltip02"
                                            placeholder="Masukkan Kapasitas Loker" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <!-- baris 2 (harusnya dropdown) -->
                                <div class="form-row">
                                    <div class="col-md-6 mb-3 ">
                                        <label>Jenis Buku</label>
                                        <select name="jenis" id="jenis" class="form-select">
                                            <option selected disabled hidden>Pilih Jenis Buku</option>
                                            <option>Fiksi</option>
                                            <option>Ilmiah</option>
                                            <option>Jurnal</option>
                                        </select>

                                    </div>
                                </div>
                                <!-- akhir form input -->
                                <div style="text-align: right;">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
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
                                        <th>Nomor Loker</th>
                                        <th>Kapasitas</th>
                                        <th>Jenis Buku</th>
                                        <th>Sisa Ruang</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rak as $data)
                                        @php
                                            $buku = App\Models\DataBuku::where('rak_id', '=', $data->id)->get();
                                        @endphp
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $data->nomor }}</td>
                                            <td>{{ $data->kapasitas }} Buku</td>
                                            <td>{{ $data->jenis }}</td>
                                            <td>{{ $data->kapasitas - $buku->count() }} Buku</td>
                                            <th>
                                                <button type="button" class="btn mr-2 mb-2 btn-primary"
                                                    data-toggle="modal"
                                                    data-target="#detailRakModal{{ $data->id }}">Detail</button>
                                                <button type="button" class="btn mr-2 mb-2 btn-primary"
                                                    data-toggle="modal"
                                                    data-target="#editRakModal{{ $data->id }}">Ubah</button>
                                                <button type="button" class="btn mr-2 mb-2 btn-danger"
                                                    data-toggle="modal"
                                                    data-target="#exampleModal{{ $data->id }}">Delete</button>
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
            <!-- akhir input ddata rak -->
            <!-- akhir konten  -->
            <!-- akhir dari konten  (semua sudah auto padding jadinya ya) -->
        </div>

    </div>

    <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
    </div>
    </div>

    <!-- modal -->
    @foreach ($rak as $data)
        <div class="modal fade bd-example-modal-lg" id="editRakModal{{ $data->id }}" tabindex="1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true" style="padding-top: 100px;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Rak</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/dataRak/update/{{ $data->id }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <!-- input di modal -->
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip01">Nomor Rak</label>
                                    <input type="text" name="nomor" class="form-control" id="validationTooltip01"
                                        placeholder="Masukkan Nomor Rak" value="{{ $data->nomor }}" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip02">Kapasitas Loker</label>
                                    <input type="number" name="kapasitas" class="form-control" id="validationTooltip02"
                                        placeholder="Masukkan Kapasitas Loker" value="{{ $data->kapasitas }}" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3 ">
                                    <label>Jenis Buku</label>
                                    <select name="jenis" id="jenis" class="form-select">
                                        <option selected disabled hidden>Pilih Jenis Buku</option>
                                        <option @if ($data->jenis == 'Fiksi') selected @endif>Fiksi</option>
                                        <option @if ($data->jenis == 'Ilmiah') selected @endif>Ilmiah</option>
                                        <option @if ($data->jenis == 'Jurnal') selected @endif>Jurnal</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- modar untuk delete data buku -->
    @foreach ($rak as $data)
        <div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                        <p>Apakah yakin ingi menghapus data Rak {{ $data->nomor }} tersebut?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="/dataRak/delete/{{ $data->id }}" class="btn btn-danger">Yakin</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- modal untuk detail data rak -->
    @foreach ($rak as $data)
        @php
            $buku = App\Models\DataBuku::where('rak_id', '=', $data->id)->get();
        @endphp
        <div class="modal fade bd-example-modal-lg" id="detailRakModal{{ $data->id }}" tabindex="1"
            role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="padding-top: 100px;">
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
                                    <input type="text" name="nomor" class="form-control" id="validationTooltip01"
                                        placeholder="Masukkan Nomor Rak : A1" value="{{ $data->nomor }}" readonly>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip02">Kapasitas Loker</label>
                                    <input type="number" name="kapasitas" class="form-control" id="validationTooltip02"
                                        placeholder="Masukkan Kapasitas Loker" value="{{ $data->kapasitas }}" readonly>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <!-- baris 2 (harusnya dropdown) -->
                            <div class="form-row">
                                <div class="col-md-6 mb-3 ">
                                    <label>Jenis Buku</label>
                                    <input type="text" name="nomor" class="form-control" id="validationTooltip01"
                                        placeholder="Masukkan Nomor Rak : A1" value="{{ $data->jenis }}" readonly>

                                </div>
                                <!-- untuk sisa ruang -->
                                <div class="col">
                                    <label for="validationTooltip02">Sisa Ruang</label><br>
                                    <button class="btn btn-primary">{{ $data->kapasitas - $buku->count() }}
                                        Buku</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- akhir modal -->
    <!-- akhir modal -->
@endsection
