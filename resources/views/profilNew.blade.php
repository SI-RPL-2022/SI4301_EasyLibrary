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
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <title> Login | EasyLibrary </title>
</head>

<body style="background: #dddddd;">
  {{-- Awal navbar --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/img/logo-easylibs.svg" alt="" width="131" height="47">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Katalog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Layanan</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
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
            <form action="">
              <div class="mb-3">
                <label for="namaDepan" class="form-label"><b>Nama Depan</b></label>
                <input type="name" class="form-control" id="namaDepan" aria-describedby="#">
              </div>
              <div class="mb-3">
                <label for="namaBelakang" class="form-label"><b>Nama Belakang</b></label>
                <input type="name" class="form-control" id="namaBelakang" aria-describedby="#">
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label"><b>Alamat</b></label>
                <input type="address" class="form-control" id="alamat" aria-describedby="#">
              </div>
              <div class="mb-3">
                <label for="negara" class="form-label"><b>Negara</b></label>
                <input type="name" class="form-control" id="negara" aria-describedby="#">
              </div>
            </form>
          </div>
          <div class="col">
            <div class="mb-3">
              <label for="alamat" class="form-label"><b>ID Card</b></label>
              <input type="number" class="form-control" id="alamat" aria-describedby="#">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label"><b>Email</b></label>
              <input type="email" class="form-control" id="email" aria-describedby="#">
            </div>
            <div class="mb-3">
              <label for="nomorHP" class="form-label"><b>Nomor Handphone</b></label>
              <input type="number" class="form-control" id="nomorHP" aria-describedby="#">
            </div>
            <div class="mb-3">
              <label for="provinsi" class="form-label"><b>Provinsi</b></label>
              <input type="text" class="form-control" id="provinsi" aria-describedby="#">
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-primary">Simpan Perubahan</button>
        <button type="button" class="btn btn-light">Batal</button>
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

  {{-- akhir content profile --}}


  <section id="profil">

  </section>

  <footer class="footer pb-3" style="background-color: #3F6AD8;">
    <div class="p-3 mb-2 text-white" style="background-color: #3F6AD8;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <h4 class="font16 font-thin font-white uppercase">Universitas Telkom</h4>
            <div class="title-line color"></div>
            <div>
              <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                </svg><span>Telkom University, Jl. Telekomunikasi No. 1, Terusan Buahbatu - Bojongsoang, <br>Sukapura,
                  Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 font-white">
            <h4 class="font16 font-thin uppercase">Layanan Kami</h4>
            <div class="title-line color"></div>
            <ul class="listitems left-padd0">
              <li>Peminjaman Buku</a></li>
              <li>Donasi Buku</a></li>
              <li>Pengembalian Buku</a></li>
            </ul>
          </div>

          <div class="col-md-4 col-sm-12">
            <h4 class="font16 font-thin font-white uppercase">Kontak Kami</h4>
            <ul class="address-info listitems">
              <li><i class="fa fa-map-marker"></i>hello@app.net</li>
              <li><i class="fa fa-phone"></i>0822 5527 6688</li>
              <li><i class="fa fa-envelope"></i>www.easylib.net</li>
              <li><i class="fa fa-envelope"></i>@easylib</li>
              <li><i class="fa fa-envelope"></i>easy.lib</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-12 text-center text-white">
        <p>Make with <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-heart-fill"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
          </svg> EasyLibrary ©2022.</p>
      </div>
  </footer>

  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>