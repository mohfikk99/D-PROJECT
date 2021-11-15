<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $title; ?></title>
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
</style>



<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a href="<?= base_url('admin/petunjuk'); ?>"> <h3 class="warna-biru"><strong>Kantor Desa Olu</strong></h3></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu warna-biru"></span>
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="<?= base_url('admin'); ?>" class="nav-link">Data Pengguna</a></li>
          <li class="nav-item"><a href="<?= base_url('admin/profil'); ?>" class="nav-link">Data Profil</a></li>
          <li class="nav-item"><a href="<?= base_url('admin/absensi'); ?>" class="nav-link">Data Absensi</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/aktivitas'); ?>">Data Aktivitas</a></li>
          <li class="nav-item cta"><a href="<?= base_url('home/logout'); ?>" class="nav-link"><span>Keluar</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->