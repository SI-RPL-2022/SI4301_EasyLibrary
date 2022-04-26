<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/main.css'); }} ">
    <title>Lihat Detail | EasyLibrary </title>
  </head>
  <body>
  @include('layouts.navbarUser')
    
  <section class="detailBuku" style="height: 550px">
    <div class="container">
      <div class="row mb-3">
          <div class="col mt-3">
            <h2>Detail Buku</h2>
          </div>
          <div class="container-fluid overflow-hidden bg-light" style="border-radius: 20px; padding: 20px;">
            <div class="col">
                <div class="row">
                <div class="d-flex">
                    <div class="mr-auto p-2">
                        <div class="kontenBuku" style="padding: 20px;">
                            <h4>Mindset</h4>
                            <p>Carol S. Dweck</p>
                        </div>
                    </div>
                    <div class="p-2 d-flex align-content-around flex-wrap">
                      <div class="time">
                          <h6>Tanggal Pengambilan Buku</h6>
                          <button type="button" class="btn btn-outline-secondary">03 Des 2022 - 13:15 WIB</button>
                      </div>
                    </div>    
                  </div>
                </div>
            </div>
          </div>
      </div>
  </section>
  @include('layouts.footer')

</body>
</html>