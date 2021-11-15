<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/')?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/animate.css">
    
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url('assets/')?>css/aos.css">

    <link rel="stylesheet" href="<?= base_url('assets/')?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/')?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/utama.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
        <h3><strong>Kantor Desa Olu</strong></h3>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?= base_url('user'); ?>" class="nav-link">Absensi</a></li>
	          <li class="nav-item active"><a href="<?= base_url('user/aktivitas'); ?>" class="nav-link">Aktivitas</a></li>
            <li class="nav-item active"><a href="<?= base_url('user/semua_data'); ?>" class="nav-link">All</a></li>
	          <li class="nav-item cta"><a href="<?= base_url('home/logout'); ?>" class="nav-link"><span>Keluar</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->