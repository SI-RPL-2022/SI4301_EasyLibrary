<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Katalog Buku</title>
</head>

<body style="background-color: #F6F6F6;height: 550px">
    <!-- navbar -->
    @include('layouts.navbarGuest')
    <!-- akhir navbar -->

    <!-- awal content -->
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <h3>Katalog Buku</h3>
            </div>
            <div class="col-md-3" style="text-align: right;">
                <form class="d-flex">
                    <input class="form-control me-2 text-primary" type="search" placeholder="Cari Judul Buku"
                        aria-label="Search">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </div>
    <!-- card -->
    <div class="container mt-3">
        <div class="row mb-3 justify-content-between">
            <div class="col">
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            <img src="./img/thinkgrow.svg" class="card-img-top" alt="..."
                                style="margin-top: 20px; margin-left: 20px;">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <!-- judul buku -->
                                <h5 class="card-title">Think And Grow</h5>
                                <!-- penggarang -->
                                <p style="color: rgb(161, 161, 161);">Napoleon Hill</p>
                                <!-- ringkasan singkat bukunya -->
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat
                                    quis commodi architecto sapiente consequuntur alias, rerum nostrum. Incidunt ipsa
                                    quidem saepe, iure ex et provident? Magnam, amet eos! Qui est voluptates ipsa
                                    sapiente tenetur pariatur dicta necessitatibus, modi, enim vero exercitationem</p>
                                <hr>
                                <!-- penerbit -->
                                <p>Penerbit : Gramedia Pustaka Utama</p>
                                <hr>
                                <!-- tahun terbit -->
                                <p>Tahun terbit : 2018</p>
                                <a href="#" class="btn btn-primary">Lihat Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            <img src="./img/thinkgrow.svg" class="card-img-top" alt="..."
                                style="margin-top: 20px; margin-left: 20px;">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <!-- judul buku -->
                                <h5 class="card-title">Think And Grow</h5>
                                <!-- penggarang -->
                                <p style="color: rgb(161, 161, 161);">Napoleon Hill</p>
                                <!-- ringkasan singkat bukunya -->
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat
                                    quis commodi architecto sapiente consequuntur alias, rerum nostrum. Incidunt ipsa
                                    quidem saepe, iure ex et provident? Magnam, amet eos! Qui est voluptates ipsa
                                    sapiente tenetur pariatur dicta necessitatibus, modi, enim vero exercitationem</p>
                                <hr>
                                <!-- penerbit -->
                                <p>Penerbit : Gramedia Pustaka Utama</p>
                                <hr>
                                <!-- tahun terbit -->
                                <p>Tahun terbit : 2018</p>
                                <a href="#" class="btn btn-primary">Lihat Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir content -->

    <!-- footer -->
    @include('layouts.footer')
    <!-- akhir Footer -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>