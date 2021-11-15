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
                <?php foreach ($absensi as $p) : ?>
                    <form action="<?= base_url('pengaturan_admin/update_absensi'); ?>" method="POST">
                        <div class="form-group row">
                            <label for="id_pengguna" class="col-sm-2 col-form-label">^ Nama</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="id_absensi" value="<?= $p->id_absensi; ?>">
                                <input type="hidden" name="id_pengguna" value="<?= $p->id_pengguna; ?>">
                                <input class="form-control" value="<?= $p->nama; ?>" readonly>
                                <p style="font-size: 13px;">Ket : Jika ingin merubah <strong>nama</strong> dan <strong>jabatan</strong> silahkan ubah di halaman pengguna terlebih dahulu.</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-2 col-form-label">* tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $p->tanggal; ?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">keterangan</label>
                            <div class="col-sm-10">
                                <select name="keterangan" class="form-control" id="keterangan" required>
                                    <option value="<?= $p->keterangan; ?>"><?= $p->keterangan; ?></option>
                                    <option value="hadir">Hadir</option>
                                    <option value="izin">Izin</option>
                                    <option value="sakit">Sakit</option>
                                    <option value="tidak hadir">tidak hadir</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
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