<section class="ftco-section services-section bg-light mt-4">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h3 class="mb-4 mt-5"> <strong><?= $title; ?></strong></h3>
            </div>
        </div>

        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-8">
                <?php foreach ($aktivitas as $p) : ?>
                    <form action="<?= base_url('pengaturan_admin/update_aktivitas'); ?>" method="POST">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">^ Nama</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="id_aktivitas" value="<?= $p->id_aktivitas; ?>">
                                <input type="hidden" name="id_absensi" value="<?= $p->id_absensi; ?>">
                                <input class="form-control" value="<?= $p->nama; ?>" readonly>
                                <p style="font-size: 11px;">Ket : Jika ingin merubah <strong>nama</strong> dan <strong>tanggal</strong> silahkan ubah di halaman pengguna dan absensi terlebih dahulu.</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="aktivitas_harian" class="col-sm-2 col-form-label">Aktivitas Harian</label>
                            <div class="col-sm-10">
                                <textarea rows="10" class="form-control" id="aktivitas_harian" name="aktivitas_harian" value="<?= $p->aktivitas_harian; ?>"><?= $p->aktivitas_harian; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>

                    </form>
                <?php endforeach; ?>

            </div>
        </div>

    </div>
</section>