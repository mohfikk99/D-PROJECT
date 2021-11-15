<section class="ftco-section services-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4">Absensi</h2>
                <p>Data Yang Tampil Berdasarkan Data Perminggu</p>
            </div>
        </div>





        <div class="row">
            <?php foreach ($absensi as $minggu) : ?>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-calendar"></span>
                        </div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Tanggal : <?= $minggu['tanggal']; ?></h3>
                            <p>Day : <?= $minggu['hari']; ?></p>
                            <?php
                            $datetime = $minggu['hari'];
                            switch ($datetime) {
                                case 'Sun':
                                    $hari = 'Minggu';
                                    break;
                                case 'Mon':
                                    $hari = 'Senin';
                                    break;
                                case 'Tue':
                                    $hari = 'Selasa';
                                    break;
                                case 'Wed':
                                    $hari = 'Rabu';
                                    break;
                                case 'Thu':
                                    $hari = 'Kamis';
                                    break;
                                case 'Fri':
                                    $hari = 'Jum`at';
                                    break;
                                case 'Sat':
                                    $hari = 'Sabtu';
                                    break;

                                default:
                                    $hari = 'tidak ada';
                                    break;
                                return $hari;
                            }
                            ?>
                            <p>Hari : <?= $hari; ?></p>
                            
                        </div>
                        <a href="<?= base_url('user/detail_absensi/' . $minggu['tanggal']); ?>" class="btn btn-light px-4 py-3">Detail</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>