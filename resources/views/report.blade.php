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
                                        <th>Bulan</th>
                                        <th>Jumlah Donasi/Bulan</th>
                                        <th>Jumlah Peminjaman/Bulan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Januari</td>
                                        <td>{{ $donasiArr[1] }}</td>
                                        <td>{{ $userArr[1] }}</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Februari</td>
                                        <td>{{ $donasiArr[2] }}</td>
                                        <td>{{ $userArr[2] }}</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Maret</td>
                                        <td>{{ $donasiArr[3] }}</td>
                                        <td>{{ $userArr[3] }}</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>April</td>
                                        <td>{{ $donasiArr[4] }}</td>
                                        <td>{{ $userArr[4] }}</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Mei</td>
                                        <td>{{ $donasiArr[5] }}</td>
                                        <td>{{ $userArr[5] }}</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Juni</td>
                                        <td>{{ $donasiArr[6] }}</td>
                                        <td>{{ $userArr[6] }}</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>July</td>
                                        <td>{{ $donasiArr[7] }}</td>
                                        <td>{{ $userArr[7] }}</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Agustus</td>
                                        <td>{{ $donasiArr[8] }}</td>
                                        <td>{{ $userArr[8] }}</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>September</td>
                                        <td>{{ $donasiArr[9] }}</td>
                                        <td>{{ $userArr[9] }}</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Oktober</td>
                                        <td>{{ $donasiArr[10] }}</td>
                                        <td>{{ $userArr[10] }}</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>November</td>
                                        <td>{{ $donasiArr[11] }}</td>
                                        <td>{{ $userArr[11] }}</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Desember</td>
                                        <td>{{ $donasiArr[12] }}</td>
                                        <td>{{ $userArr[12] }}</td>
                                    </tr>
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
