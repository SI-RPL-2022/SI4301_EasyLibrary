<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Lihat Detail | EasyLibrary </title>
  </head>
  <body>
  @include('layouts.navbarUser')
    
  <section class="detailBuku">
    <div class="container">
      <div class="row mb-3">
          <div class="col mt-3">
            <h2>Detail Buku</h2>
          </div>
          <div class="container overflow-hidden bg-light" style="border-radius: 20px; padding: 20px;">
            <div class="col">
              <div class="row">
                <div class="col-6">
                    <img src="/img/mindset.png" alt="" style="weight: 100px; height: 300px; padding: 20px;">
                </div>
                <div class="col-6">
                  <div class="kontenBuku" style="padding: 20px;">
                  <h4>Info Blibiografi</h4>
                  <br>
                    <h5>Judul</t></t></t></t> : Mindset</p>
                    <h5>Pengarang</t></t>     : Carol S. Dweck</p>
                    <h5>Penerbit</t></t>      : Baca</p>
                    <h5>Halaman </t></t>      : 418 Halaman</p>
                  </div>
                  <div class="d-flex flex-row-reverse">
                    <button type="button" class="btn btn-large btn-block btn-primary"  data-bs-toggle="modal" data-bs-target="#pinjam"> Pinjam </button>
                    <div class="p-2"><bold>18<bold> Tersedia</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </section>


  <!-- MODAL -->
  <div class="modal fade" id="pinjam" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pinjam">Pilih Buku</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <br>
        <div class="modal-body">
          <div class="modal-body">
            <p>Nama Siswa : Emerson</p>
            <p>NIK        : : 232423684239423</p>
          </div>
          <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <p>Buku yang akan di pinjam : </p>
              <p>Mindset</p>
            </div>
            <div class="col-md-6 ml-auto">
              <div class="btn-group">
                <button type="" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  03 Des 2022 - 13:15 WIB
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <button class="dropdown-item" type="button">Action</button>
                  <button class="dropdown-item" type="button">Another action</button>
                  <button class="dropdown-item" type="button">Something else here</button>
                </div>
              </div>
            </div>
          </div>
           
            
          </div>
          <div class="modal-footer">
            <button type="submit" name="no" class="btn btn-outline" data-dismiss="modal">Kembali</button>
            <a href="" type="button" name="submit_beli" class="btn btn-success">Lanjut</a>
          </div>
        </div>
      </div>
    </div>
  </div><br>

  <section class="sinopsis">
    <div class="container overflow-hidden bg-light" style="border-radius: 20px;">
              <div class="col">
                <div class="row">
                  <div class="col">
                    <div class="kontenBuku" style="padding: 20px;">
                    <h4>Sinopsis</h4>
                    <br>
                    <p>Terbukti telah mengubah cara orang melihat dunia dan 
                      kesuksesan hidup di berbagai belahan dunia, Mindset bertengger jadi top-seller di amazon.com sejak 13 tahun lalu hingga sekarang.</p>
                    <p>
                    Paparan tentang kesuksesan dalam buku ini sangat mendasar dan langka. Lazimnya, buku-buku tentang kesuksesan lebih menawarkan sisi-sisi praktis. 
                    Namun, buku ini justru mengajak Anda menggarap inti masalah kesuksesan: pikiran. Tak hanya itu, buku ini mengontraskan dengan apik tokoh-tokoh dunia—di bidang musik, sastra, sains, olahraga, dan bisnis—yang berpola pikir tetap (ﬁxed mindset) dan berpola pikir tumbuh (growth mindset). Ternyata, tokoh yang berpola pikir tumbuh lebih mampu mempertahankan kesuksesan dan kegembiraan hidup. 
                    Hal ini dikarenakan mereka lebih menekankan proses belajar dan peran ikhtiar daripada mengandalkan bakat dan kecerdasan.
                    </p>
                    <p>
                    Bagi Anda penikmat buku motivasi, teramat sayang bila Anda tak melahap isi buku ini. Bagi Anda para pemimpin, eksekutif, guru, orangtua, atau pelatih olahraga, <br>
                    buku ini sangat membantu dalam mengubah para pembelajar “bermasalah” menjadi insan-insan sukses dan bahagia. Sebagai pribadi pun, Anda tak bakal kecewa dengan <br>
                    buku hasil penelitian 20 tahun lebih dari ahli kenamaan di bidang psikologi kepribadian ini. Banyak inspirasi yang niscaya membuat Anda senantiasa optimistis, <br>
                    gembira, dan terampil membangkitkan kemampuan-kemampuan dahsyat dalam diri Anda.
                    </p>
                    <p>
                    “Buku ini menjelaskan dengan gamblang bagaimana keyakinan atas kemampuan yang kita miliki amat berpengaruh terhadap cara kita belajar dan menentukan pilihan <br>
                    di dalam kehidupan.” —Bill Gates
                    </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  </section>
  @include('layouts.footer')

</body>
</html>