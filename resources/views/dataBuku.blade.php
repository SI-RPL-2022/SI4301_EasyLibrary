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
                                <div class="widget-numbers text-white"><span>{{$pinjam->count()}}</span></div>
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
                                <div class="widget-numbers text-white"><span>{{$kembali->count()}}</span></div>
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
                                <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
                                    data-target="#inputBukuModal">tambah</button>
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
                                    @foreach ($data as $buku)
                                        <tr>
                                            <td scope="row">{{ $nomor++ }}</td>
                                            <td>{{ $buku->id_card }}</td>
                                            <td>{{ $buku->judul }}</td>
                                            <td>{{ $buku->rak->nomor }}</td>
                                            <td><b>{{ $buku->status }}</b></td>

                                            <th>
                                                <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
                                                    data-target="#editBukuModal{{ $buku->id }}">Ubah</button>
                                                <button type="button" class="btn mr-2 mb-2 btn-danger" data-toggle="modal"
                                                    data-target="#exampleModal{{ $buku->id }}">Delete</button>
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

        </div>

    </div>
    <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
    </div>
    </div>

    <!-- modar untuk input data buku -->
    <div class="modal fade bd-example-modal-lg" id="inputBukuModal" tabindex="1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="padding-top: 100px;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Input Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/inputBuku" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <!-- input di modal -->
                        <!-- baris 1 -->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">ID Card</label>
                                <input name="id_card" type="text" class="form-control" id="validationTooltip01"
                                    placeholder="Masukkan ID Card" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip02">Tahun terbit</label>
                                <input name="tahun" type="number" class="form-control" id="validationTooltip02"
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
                                <input name="judul" type="text" class="form-control" id="validationTooltip01"
                                    placeholder="Masukkan Judul Buku" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <!-- masukkan status barang harus nya dropdown -->
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip02">Status Buku</label>
                                <select name="status" id="validationTooltip02" class="form-select">
                                    <option value="" selected hidden disabled>Pilih Status</option>
                                    <option value="Dipinjam">Dipinjam</option>
                                    <option value="Tersedia">Tersedia</option>
                                </select>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <!-- baris 3 -->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Pengarang</label>
                                <input name="pengarang" type="text" class="form-control" id="validationTooltip01"
                                    placeholder="Masukkan Nama Pengarang" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <!-- input foto -->
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip02">Masukkan Foto Buku</label>
                                <input name="foto" type="file" class="form-control" id="validationTooltip02"
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
                                <input name="penerbit" type="text" class="form-control" id="validationTooltip01"
                                    placeholder="Masukkan Nama Penerbit" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <!-- Jenis Rak Dropdown -->
                            <div class="col-md-6 mb-3 dropdown">
                                <label>Jenis Rak</label>
                                <select name="rak" id="validationTooltip02" class="form-select">
                                    <option value="" selected hidden disabled>Pilih Rak</option>
                                    @foreach ($rak as $raks)
                                        <option value="{{ $raks->id }}">{{ $raks->nomor }}</option>
                                    @endforeach
                                </select>

                            </div>.
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

    @foreach ($data as $buku)
        <!-- modar untuk edit data buku -->
        <div class="modal fade bd-example-modal-lg" id="editBukuModal{{ $buku->id }}" tabindex="1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true" style="padding-top: 100px;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Input Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/editBuku/{{ $buku->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <!-- input di modal -->
                            <!-- baris 1 -->
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip01">ID Card</label>
                                    <input name="id_card" type="text" class="form-control" id="validationTooltip01"
                                        placeholder="Masukkan ID Card" value="{{ $buku->id_card }}" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip02">Tahun terbit</label>
                                    <input name="tahun" type="number" class="form-control" id="validationTooltip02"
                                        placeholder="Masukkan Tahun Terbit" value="{{ $buku->tahun_terbit }}" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <!-- baris 2 -->
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip01">Judul Buku</label>
                                    <input name="judul" type="text" class="form-control" id="validationTooltip01"
                                        placeholder="Masukkan Judul Buku" value="{{ $buku->judul }}" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <!-- masukkan status barang harus nya dropdown -->
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip02">Status Buku</label>
                                    <select name="status" id="validationTooltip02" class="form-select">
                                        <option value="" selected hidden disabled>Pilih Status</option>
                                        <option value="Dipinjam" @if ($buku->status == 'Dipinjam') selected @endif>Dipinjam
                                        </option>
                                        <option value="Tersedia" @if ($buku->status == 'Tersedia') selected @endif>Tersedia
                                        </option>
                                    </select>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <!-- baris 3 -->
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip01">Pengarang</label>
                                    <input name="pengarang" type="text" class="form-control" id="validationTooltip01"
                                        placeholder="Masukkan Nama Pengarang" value="{{ $buku->pengarang }}" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <!-- input foto -->
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip02">Masukkan Foto Buku</label>
                                    <input name="foto" type="file" class="form-control" id="validationTooltip02"
                                        placeholder="Pilih Foto Buku">
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <!-- Baris 4 -->
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip01">Penerbit</label>
                                    <input name="penerbit" type="text" class="form-control" id="validationTooltip01"
                                        placeholder="Masukkan Nama Penerbit" value="{{ $buku->penerbit }}" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <!-- Jenis Rak Dropdown -->
                                <div class="col-md-6 mb-3 dropdown">
                                    <label>Jenis Rak</label>
                                    <select name="rak" id="validationTooltip02" class="form-select">
                                        <option value="" selected hidden disabled>Pilih Rak</option>
                                        @foreach ($rak as $raks)
                                            <option value="{{ $raks->id }}"
                                                @if ($buku->rak_id == $raks->id) selected @endif>{{ $raks->nomor }}
                                            </option>
                                        @endforeach
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


    <!-- modar untuk delete data buku -->
    @foreach ($data as $buku)
        <div class="modal fade" id="exampleModal{{ $buku->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                        <p>Apakah yakin ingi menghapus data Buku {{ $buku->judul }} tersebut?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="/deleteBuku/{{ $buku->id }}" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
