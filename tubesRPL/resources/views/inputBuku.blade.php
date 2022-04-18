@extends('layouts.admin_layout')

@section('content')
    <div class="d-flex mt-3 mb-3">
        <i class="bi bi-briefcase bg-white px-4 py-3 mb-5 "></i>
        <div class="ms-5 me-auto">
            <h4>Donasi Buku</h4>
            <p class="text-muted">Kelola Penyimpanan Buku</p>
        </div>
        <div class="me-2">
            <a href="#" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Kembali</a>
        </div>
    </div>

    <h4>Masukkan Data Buku</h4>
    <div class="bg-white my-3 p-3">
        <div class="row mb-2">
            <div class="col">
                <label for="id_card" class="form-label">Nama ID Card</label>
                <input type="text" name="id_card" id="id_card" class="form-control">
            </div>
            <div class="col">
                <label for="tahun" class="form-label">Tahun Terbit</label>
                <input type="text" name="tahun" id="tahun" class="form-control">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <label for="judul" class="form-label">Judul Buku</label>
                <input type="text" name="judul" id="judul" class="form-control">
            </div>
            <div class="col">
                <label for="status" class="form-label">Status Buku</label>
                <input type="text" name="status" id="status" class="form-control">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <label for="pengarang" class="form-label">Pengarang Buku</label>
                <input type="text" name="pengarang" id="pengarang" class="form-control">
            </div>
            <div class="col">
                <label for="foto" class="form-label">Foto Buku</label>
                <input type="file" name="foto" id="foto" class="form-control">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <label for="tebal_buku" class="form-label">Tebal Buku</label>
                <input type="text" name="tebal_buku" id="tebal_buku" class="form-control">
            </div>
            <div class="col">
                <label for="no_rak" class="form-label">Input Rak</label>
                <input type="text" name="no_rak" id="no_rak" class="form-control">
            </div>
        </div>

        <div class="row text-end">
            <div class="col">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>

    <div class="bg-white p-3">
        <h5>Data Buku</h5>
        <table class="table text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID Buku</th>
                    <th>Nama Buku</th>
                    <th>Rak</th>
                    <th>Status Barang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 10; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>SPIS-000000022</td>
                        <td>Think Grow Rich</td>
                        <td>L 07 A</td>
                        <td><p class="bg-info p-1 text-white rounded text-center">Peminjamam</p></td>
                        <td>
                            <a href="#" class="text-info text-decoration-none">More <i class="bi bi-caret-down-fill"></i></a>
                            <a href="#" class="btn btn-success"><i class="bi bi-pencil-square"></i> Ubah</a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
