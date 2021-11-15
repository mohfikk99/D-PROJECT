<section class="ftco-section services-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4"><?= $title; ?></h2>
                <p>Data Yang Tampil Berdasarkan Data Hari Ini </p>
            </div>
        </div>





        <div class="row">
            <?php foreach ($detail_absensi as $data) : ?>
                <div class="col-md-4 ftco-animate">
                    <div class="media block-6 services border text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-user"></span>
                        </div>
                        <div class="mt-3 media-body media-body-2">
                            <h3 class="heading">Tanggal : <?= $data['tanggal']; ?></h3>
                            <p>Nama : <?= $data['nama']; ?></p> 
                            <p>Keterangan : <?= $data['keterangan']; ?></p> 
                            <p>Aktivitas Harian : <?= $data['aktivitas_harian']; ?></p> 
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>