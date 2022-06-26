<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title> Login | EasyLibrary </title>
</head>

<body style="background: #dddddd;">
    {{-- Awal navbar --}}
    @include('layouts.navbarUser')
    {{-- akhir navbar --}}
    {{-- awal content profile --}}

    {{-- awal Heading --}}
    <div class="container mt-5 mb-5">
        <h1>Setelan Akun</h1>
    </div>
    {{-- akhir Heading --}}

    <!-- awal card content -->
    <div class="container mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Detail Profile</h5>
                <div class="row">
                    <div class="col">
                        <!-- di isi dengan foto profil nantinya -->
                        <div class="card mb-4" style="height: 180px; width: 180px;">
                            <!-- <div class="card-body"></div> -->
                        </div>
                        <button type="button" class="btn btn-primary">Unggah Foto</button>
                        <button type="button" class="btn btn-light">Reset</button>
                        <br>
                        <p style="color: #cac8c8; margin-top: 20px;">Allowed JPG,GIF or PNG, Max Size of 8 MB</p>

                    </div>
                    <div class="col" style="text-align: center;">
                        <h2 class="mt-5">Total Donasi Buku</h2>
                        <h3 class="mt-4" style="color:#3F6AD8">24</h3>
                    </div>
                    <hr style="color: rgb(102, 102, 102);">
                </div>

                <!-- form data diri / data profile (form) -->
                <div class="row">
                    <div class="col">
                        <form action="/updateProfil/{{ auth()->user()->id }}" method="POST"
                            enctype="multipart/form-data">
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
                                <input type="name" class="form-control" name="negara" aria-describedby="#" value="{{ Auth::user()->negara }}">
                            </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="alamat" class="form-label"><b>ID Card</b></label>
                            <input type="number" class="form-control" name="id_card" aria-describedby="#" value="{{ Auth::user()->id_card }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"><b>Email</b></label>
                            <input type="email" class="form-control" name="email" aria-describedby="#"
                                value="{{ Auth::user()->email }}" >
                        </div>
                        <div class="mb-3">
                            <label for="nomorHP" class="form-label"><b>Nomor Handphone</b></label>
                            <input type="number" class="form-control" name="nomorHP" aria-describedby="#" value="{{ Auth::user()->no_handphone }}">
                        </div>
                        <div class="mb-3">
                            <label for="provinsi" class="form-label"><b>Provinsi</b></label>
                            <input type="text" class="form-control" name="provinsi" aria-describedby="#" value="{{ Auth::user()->provinsi }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <button type="reset" class="btn btn-light">Batal</button>
                </form>
            </div>
        </div>
    </div>
    <!-- akhir card content -->

    <!-- content card yang kedua untuk unggah kartu identitas -->
    <div class="container mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><b>Unggah Kartu Identitas untuk verifikasi datamu</b></h5>
                <p style="color: rgb(170, 169, 169);">ktp/kartu/sim/dll*</p>
                <br>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                    <input type="file" class="form-control" id="inputGroupFile01">
                </div>
            </div>
            <div class="container mb-4" style="text-align: right;">
                <button type="button" class="btn btn-primary">Unggah Foto</button>
                <button type="button" class="btn btn-light">Reset</button>
            </div>
        </div>

    </div>
    <!-- akhir card kedua -->

    {{-- akhir content profile done --}}

    @include('layouts.footer')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
