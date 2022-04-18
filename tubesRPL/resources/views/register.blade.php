<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title> Register | EasyLibrary </title>
  </head>
  <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">
                  <img src="/img/logo-easylibs.svg" alt="" width="131" height="47">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                      {{-- <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="#">Katalog</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="#">Layanan</a>
                      </li> --}}
                  </ul>
                  <form class="d-flex">
                      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="#">Katalog</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="#">Layanan</a>
                      </li>
                  </ul>
                  </form>
              </div>
          </div>
      </nav>   <br><br>

    <form action="" method="POST">
            <div class="container overflow-hidden bg-light mb-5" style="border-radius: 15px;">
                <div class="row gx-20">
                    <div class="col-lg-6 d-flex col-lg-6 d-flex justify-content-center align-items-center bg-primary">
                      <div class="col" style="text-align: center;">
                        <div class="row" style="color: white;"><h4>Bergabunglah bersama kami</h4>
                        <br>
                          <p>Nikmati Layanan Easy Library</p></div>
                        <div class="row"><div><img src="img/regist.png" alt="" width="300" height="300"></div></div>
                      </div>
                    
                        
                    </div>
                    <div class="col-md-6">
                        <form class="form-horizontal">
                            <div class="form-group container-fluid">
                              <div style="text-align: center;"><img src="/img/logo-easylibs.svg" alt="" width="300" height="150"></div>
                            
                                <div class="mb-3">
                                    <label for="inputNama" class="col-sm-4 col-form-label">Name</label>
                                    <input type="nama" class="form-control" name="nama" placeholder="Enter your Name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your Email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>

                                <div class="d-grid gap-2 mb-3">
                                    <button class="btn btn-primary btn-block" type="submit" name="submit">Sign Up</button>
                                </div>
                                <br><br><br>
                                <p class="text-center">Already have an account? <a href="/login" class="link-primary">Login</a></p>
                                <br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    
        <footer class="card-footer bg-primary">
        <!-- <div class="row gx-20">
            sementara ini dulu ya bund
        </div>          -->
        <footer class="footer pb-3" style="background-color: #3F6AD8;">
      <div class="p-3 mb-2 text-white"style="background-color: #3F6AD8;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <h4 class="font16 font-thin font-white uppercase">Universitas Telkom</h4>
          <div class="title-line color"></div>
          <div>
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg><span>Telkom University, Jl. Telekomunikasi No. 1, Terusan Buahbatu - Bojongsoang, <br>Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</p>
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
    <p>Make with <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
    </svg> EasyLibrary ©2022.</p>
  </div>
</footer>

        </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>