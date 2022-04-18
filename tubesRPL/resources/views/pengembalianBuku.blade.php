@extends('layouts.admin_layout')

@section('content')
    <div class="d-flex mt-3 mb-5">
        <i class="bi bi-arrow-left-right bg-white px-4 py-3 mb-3"></i>
        <div class="ms-5 me-auto ">
            <h4>Data Pengembalian</h4>
            <p class="text-muted">Kelola Penyimpanan Buku</p>
        </div>
        <div class="me-2 ">
            <a href="#" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Kembali</a>
        </div>
    </div>
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
@endsection
