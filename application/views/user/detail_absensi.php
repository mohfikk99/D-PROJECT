<section class="ftco-section services-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4"><?= $title; ?></h2>
                <p>Data Absensi Yang Tampil Berdasarkan Data Hari Ini</p>
            </div>
        </div>





        <div class="row">
            <?php foreach ($detail_absensi as $data) : ?>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-users"></span>
                        </div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Tanggal : <?= $data['tanggal']; ?></h3>
                            <p>Nama : <?= $data['nama']; ?></p> 
                            <p>Keterangan : <?= $data['keterangan']; ?></p> 
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>