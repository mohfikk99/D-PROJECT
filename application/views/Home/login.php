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
  .warna-putih {
    color: white;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }
</style>

<body>


  <div class="container-fluid mt-5">
    <div class="row align-items-center">
      <div class="col-lg-3"></div>
      <div class="col-lg-6 p-5 ftco-wrap ftco-animate ">
        <h3 class="warna-putih text-center"><strong>Selamat Datang</strong></h3>
        <form action="<?= site_url('home/proses_login'); ?>" method="post">
          <?php if (isset($error)) {
            echo $error;
          }; ?>
          <div class="form-group domain-name">
            <label class="warna-putih" for="nama">* Nama Anda</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama...">
            <?php echo form_error('nama'); ?>
          </div>
          <div class="form-group domain-name mb-5">
            <label class="warna-putih" for="nama">* Password Anda</label>
            <input type="password" class="form-control" id="nama" name="password" placeholder="Masukkan Password...">
            <?php echo form_error('password'); ?>
          </div>
          <div class="text-center mt-5">
            <button type="submit" class="btn btn-light mt-5">Masuk</button>
          </div>
          <div class="text-center mt-4">
            <a href="<?= base_url('home'); ?>" class="btn btn-dark btn-user btn-block">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>


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