<!DOCTYPE html>
<html lang="en">

<head>
  <title>Desa Olu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/animate.css">

  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/magnific-popup.css">

  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/aos.css">

  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/ionicons.min.css">

  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/jquery.timepicker.css">


  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/flaticon.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/icomoon.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/utama.css">
</head>

<style>
  .warna-biru {
    color: #6927ff;
  }

  .warna-hitam {
    color: black;
  }
</style>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <h3><strong>Kantor Desa Olu</strong></h3>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item cta"><a href="<?= base_url('home/login') ?>" class="nav-link"><span>Masuk</span></a></li>
        </ul>
      </div>
    </div>
    <?= $this->session->flashdata('massage'); ?>
  </nav>
  <!-- END nav -->




  <div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
      <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
        <img class="one-third js-fullheight align-self-end order-md-last img-fluid" src="<?= base_url('assets/') ?>images/gambar/undraw_pair_programming_njlp.svg" alt="">
        <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
          <div class="text mt-5">
            <h5 class="warna-hitam"><strong>Selamat Datang</strong></h5>
            <h2 class="mb-3 warna-biru"><strong>Sistem</strong> <strong>Monitoring</strong><strong> Aktifitas Kinerja Harian</strong></h2>
            <p>Sistem Monitoring Aktivitas Kinerja Harian Pada Kantor Desa Olu, Kecamatan Lindu, Kabupaten Sigi. Sistem ini di khususkan untuk melihat laporan aktifitas pada para pegawai.</p>
            <p><a href="<?= base_url('home/login') ?>" class="btn btn-primary px-4 py-3">Masuk</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2 class="mb-4">Profil</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 nav-link-wrap mb-5 pb-md-5 pb-sm-1 ftco-animate">
          <div class="nav ftco-animate nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-nextgen-tab" data-toggle="pill" href="#v-pills-nextgen" role="tab" aria-controls="v-pills-nextgen" aria-selected="true">Kepala Desa</a>

            <a class="nav-link" id="v-pills-performance-tab" data-toggle="pill" href="#v-pills-performance" role="tab" aria-controls="v-pills-performance" aria-selected="false">Pegawai</a>

            <a class="nav-link" id="v-pills-effect-tab" data-toggle="pill" href="#v-pills-effect" role="tab" aria-controls="v-pills-effect" aria-selected="false">Warga Desa</a>
          </div>
        </div>
        <div class="col-md-12 align-items-center ftco-animate">

          <div class="tab-content ftco-animate" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-nextgen" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
              <div class="d-md-flex">
                <div class="one-forth align-self-center">
                  <img src="<?= base_url('assets/images/desa/' . $kepala_desa['gambar']); ?>" class="img-fluid" alt="">
                </div>
                <div class="one-half ml-md-5 align-self-center">
                  <h2 class="mb-4">Kepala Desa</h2>
                  <p>Nama : <?= $nama_kepala_desa['nama']; ?></p>
                  <p>Alamat : <?= $nama_kepala_desa['alamat']; ?></p>
                  <p>No Telepon : <?= $nama_kepala_desa['telepon']; ?></p>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-performance" role="tabpanel" aria-labelledby="v-pills-performance-tab">
              <div class="d-md-flex">
                <div class="one-forth order-last align-self-center">
                  <img src="<?= base_url('assets/images/desa/' . $pegawai['gambar']); ?>" class="img-fluid" alt="">
                </div>
                <div class="one-half order-first mr-md-5 align-self-center">
                  <h2 class="mb-4">Pegawai </h2>
                  <p>Total Pegawai Kantor Desa Olu, Kecamatan Lindu, Kabupaten Sigi, terdiri dari 7 orang </p>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-effect" role="tabpanel" aria-labelledby="v-pills-effect-tab">
              <div class="d-md-flex">
                <div class="one-forth align-self-center">
                  <img src="<?= base_url('assets/images/desa/' . $warga_desa['gambar']); ?>" class="img-fluid" alt="">
                </div>
                <div class="one-half ml-md-5 align-self-center">
                  <h2 class="mb-4">Warga Desa</h2>
                  <p>Desa Olu merupakan desa pemekaran dari desa Tomado Kecamatan Lindu. Terdiri 5 Dusun. Desa Pemekaran dari Desa Tomado tahun 2014 yang berlokasi di Kecamatan Lindu, Kabupaten Sigi, Provinsi Sulawesi Tengah </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="ftco-section services-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2 class="mb-4">Struktur Pegawai Kantor Desa</h2>
          <p>Kantor Desa Olu, Kecamatan Lindu, Kabupaten Sigi.</p>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-sm-12">
          <img src="<?= base_url('assets/images/desa/' . $struktur['gambar']); ?>" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 py-5">
          <div class="heading-section ftco-animate mt-5">
            <h2 class="mb-4">Kantor Desa Olu</h2>
            <p>Desa Olu merupakan desa pemekaran dari desa Tomado Kecamatan Lindu. Terdiri 5 Dusun. Desa Pemekaran dari Desa Tomado tahun 2014</p>
          </div>
          <img src="<?= base_url('assets/images/desa/' . $kantor['gambar']); ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 py-5">
          <div class="row">
            <?php foreach ($data_desa as $desa) : ?>
              <div class="col-md-6 ftco-animate">
                <div class="media block-6 services border text-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-book"></span>
                  </div>
                  <div class="mt-3 media-body media-body-2">
                    <h3 class="heading">Total Dusun</h3>
                    <p><?= $desa['total_dusun'];?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ftco-animate">
                <div class="media block-6 services border text-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-users"></span>
                  </div>
                  <div class="mt-3 media-body media-body-2">
                    <h3 class="heading">Jumalah Penduduk</h3>
                    <p><?= $desa['jumlah_penduduk'];?> Jiwa</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ftco-animate">
                <div class="media block-6 services border text-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-adn"></span>
                  </div>
                  <div class="mt-3 media-body media-body-2">
                    <h3 class="heading">Luas Area</h3>
                    <p><?= $desa['luas_area'];?> Hektar</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ftco-animate">
                <div class="media block-6 services border text-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-map-marker"></span>
                  </div>
                  <div class="mt-3 media-body media-body-2">
                    <h3 class="heading">Letak Geografis</h3>
                    <p>Kordinat : <?= $desa['letak_geografis'];?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>



  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; 2021 
            <!-- <script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>




  <!-- footer -->


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/popper.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/jquery.easing.1.3.js"></script>
  <script src="<?= base_url('assets/') ?>js/jquery.waypoints.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/jquery.stellar.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/aos.js"></script>
  <script src="<?= base_url('assets/') ?>js/jquery.animateNumber.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/bootstrap-datepicker.js"></script>
  <script src="<?= base_url('assets/') ?>js/jquery.timepicker.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/scrollax.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/google-map.js"></script>
  <script src="<?= base_url('assets/') ?>js/main.js"></script>

</body>

</html>