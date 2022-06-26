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
                        <div>Profil Admin
                            <div class="page-title-subheading">Kelola penyimpanan barang siswa/siswi Global Islamic Boarding
                                School
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
            <div class="bg-white py-5 px-4">
                <h3 class="mb-3">Detail Profil</h3>
                <div class="row mb-5">
                    <div class="card mb-4" style="height: 180px; width: 180px; ">
                        @if (auth()->user()->foto == null)
                            <img src="{{ asset('img/default_profile.png') }}" alt="" id="prev"
                                style="max-height: 180px; object-fit:cover ">
                        @else
                            <img src="{{ asset('storage/' . auth()->user()->foto) }}" alt="" id="prev"
                                style="max-height: 180px; object-fit:cover ">
                        @endif
                        <div class="text-center">
                            <label for="foto"><i class="bi bi-camera-fill"></i></label>
                        </div>
                    </div>
                    <form action="/upload/foto/{{ auth()->user()->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="foto" id="foto" accept="image/png, image/jpeg" hidden>
                        <button type="submit" class="btn btn-primary">Unggah Foto</button>
                        <button type="reset" class="btn btn-light">Reset</button>
                    </form>
                </div>

                <hr>

                <form action="/updateProfilAdmin/{{ auth()->user()->id }}" method="POST"
                    enctype="multipart/form-data">
                <div class="row">
                        <div class="col">
                            @csrf
                            <div class="mb-3">
                                <label for="namaDepan" class="form-label"><b>Nama Depan</b></label>
                                <input type="name" class="form-control" name="namaDepan" aria-describedby="#"
                                    value="{{ Auth::user()->nama_depan }}">
                            </div>
                            <div class="mb-3">
                                <label for="namaBelakang" class="form-label"><b>Nama Belakang</b></label>
                                <input type="name" class="form-control" name="namaBelakang" aria-describedby="#"
                                    value="{{ Auth::user()->nama_belakang }}">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label"><b>Alamat</b></label>
                                <input type="address" class="form-control" name="alamat" aria-describedby="#"
                                    value="{{ Auth::user()->alamat }}">
                            </div>
                            <div class="mb-3">
                                <label for="negara" class="form-label"><b>Negara</b></label>
                                <input type="name" class="form-control" name="negara" aria-describedby="#"
                                    value="{{ Auth::user()->negara }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="alamat" class="form-label"><b>ID Card</b></label>
                                <input type="number" class="form-control" name="id_card" aria-describedby="#"
                                    value="{{ Auth::user()->id_card }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"><b>Email</b></label>
                                <input type="email" class="form-control" name="email" aria-describedby="#"
                                    value="{{ Auth::user()->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="nomorHP" class="form-label"><b>Nomor Handphone</b></label>
                                <input type="number" class="form-control" name="nomorHP" aria-describedby="#"
                                    value="{{ Auth::user()->no_handphone }}">
                            </div>
                            <div class="mb-3">
                                <label for="provinsi" class="form-label"><b>Provinsi</b></label>
                                <input type="text" class="form-control" name="provinsi" aria-describedby="#"
                                    value="{{ Auth::user()->provinsi }}">
                            </div>
                        </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <button type="reset" class="btn btn-light">Batal</button>
                </form>
                <!-- akhir tabel -->
                <!-- akhir konten  -->
                <!-- akhir dari konten  (semua sudah auto padding jadinya ya) -->
            </div>

        </div>

        {{-- <div class="d-flex mt-3 mb-3">
        <i class="bi bi-person bg-white px-4 py-3 mb-5 "></i>
        <div class="ms-5 me-auto">
            <h4>Profil Admin</h4>
            <p class="text-muted">Kelola penyimpanan barang siswa/siswi Global Islamic Boarding School </p>
        </div>
        <div class="me-2">
            <a href="#" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Kembali</a>
        </div>
    </div> --}}
    @endsection
