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
                        <div class="page-title-subheading">Kelola penyimpanan barang siswa/siswi Global Islamic Boarding School
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
                <div class="col-md-3">
                    <img src="{{ asset('/img/default_profile.png') }}" alt="">
                </div>
                <div class="col my-5 pt-3">
                    <a href="#" class="btn btn-primary me-4">Unggah Foto</a>
                    <a href="#" class="btn btn-outline-secondary">Reset</a>
                    <p class="text-muted">Allowed JPG, GIF or PNG. Max Size of 8 MB</p>
                </div>
            </div>
    
            <hr>
    
            <div class="row mb-2">
                <div class="col">
                    <label for="nama_depan" class="form-label">Nama Depan</label>
                    <input type="text" name="nama_depan" id="nama_depan" class="form-control" value="Emerson">
                </div>
                <div class="col">
                    <label for="id_card" class="form-label">ID Card</label>
                    <input type="text" name="id_card" id="id_card" class="form-control" value="1202190321">
                </div>
            </div>
    
            <div class="row mb-2">
                <div class="col">
                    <label for="nama_belakang" class="form-label">Nama belakang</label>
                    <input type="text" name="nama_belakang" id="nama_belakang" class="form-control" value="John">
                </div>
                <div class="col">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" value="emerson@gmail.com">
                </div>
            </div>
            
            <div class="row mb-2">
                <div class="col">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="Alamat">
                </div>
                <div class="col">
                    <label for="no_hp" class="form-label">Nomor Handphone</label>
                    <input type="text" name="no_hp" id="no_hp" class="form-control" value="08123456789">
                </div>
            </div>
    
            <div class="row mb-2">
                <div class="col">
                    <label for="negara" class="form-label">Negara</label>
                    <input type="text" name="negara" id="negara" class="form-control" value="Indonesia">
                </div>
                <div class="col">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <input type="text" name="provinsi" id="provinsi" class="form-control" value="Jawa Barat">
                </div>
            </div>
        </div>
        <!-- akhir tabel -->
        <!-- akhir konten  -->
        <!-- akhir dari konten  (semua sudah auto padding jadinya ya) -->
    </div>

</div>

{{-- 
    <div class="d-flex mt-3 mb-3">
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
