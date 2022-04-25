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
    <title>Landing Page | EasyLibrary </title>
</head>

<body>
    <!-- Mungkin buat if else disini buat ganti navbar user dan guest -->
    @include('layouts.navbarGuest')

    <!-- jumbotron -->
    <section id="jumbotron">
        <div class="jumbotron">
            <div class="container">
                <div class="row  text-center mb-3">
                </div>
                <div class="row align-items-center">
                    <div class="col-6">
                        <h1 class="display-10">Buku adalah jendela ilmu,<br>mari budayakan membaca!</h1>
                        <p class="lead">Dengan bergabung ke Easylib dapat membuka wawasan<br>
                            dengan buku dimana membaca menjadi mudah dan menyenangkan.</p>
                        <a class="btn btn-primary btn-lg" href="#" role="button">Ayo, Membaca!</a>
                        </p>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="col">
                            <img src="/img/ilustrasi-jumbotron.svg" alt="" width="700" height="500">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Katalog Buku -->
    <section id="katalogProduk">
        <div class="katalogProduk">
            <div class="container">
                <div class="row mb-3">
                    <div class="col">
                        <h2>Katalog Produk</h2>
                    </div>
                    <div class="col-4">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Cari Judul Buku"
                                aria-label="Cari">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <!-- membuat baris card menjadi kolom dan ukuran medium -->
                    @for ($i = 0; $i < 3; $i++)
                        <div class="col-md-4 mb-3">
                            <div class="card" style="width: 18rem;">
                                <img src="img/mindset.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Mindset</h5>
                                    <p class="card-text">Terbukti telah mengubah cara orang melihat dunia dan
                                        kesuksesan hidup di berbagai belahan dunia, Mindset</p>
                                </div>
                                <div class="card-body">
                                    <a class="btn btn-primary btn-lg" href="/lihatDetail" role="button">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
    </section>
    @include('layouts.footer')
</body>

</html>
