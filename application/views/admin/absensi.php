<section class="ftco-section services-section bg-light mt-4">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-1"><?= $title; ?></h2>
            </div>
        </div>

        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>

        <?= $this->session->flashdata('massage'); ?>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 py-5">
                <img src="<?= base_url('assets/') ?>images/gambar/undraw_Check_boxes_re_v40f.svg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 py-5">
                <div class="row">


                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services border text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-check"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading"><?= $total; ?></h3>
                                <p>Total Data Absensi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services border text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-plus"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading"><?= $total; ?></h3>
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
                                    Tambahkan
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h3 class="mb-4"> <strong>Tabel Data Absesnsi</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr>
                                <th>No</th>
                                <th>Pilihan</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($absensi as $a) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td>
                                        <a href="<?= base_url('pengaturan_admin/edit_absensi/' . $a['id_absensi']); ?>" class="btn badge btn-warning">Ubah</a>
                                        <a href="<?= base_url('pengaturan_admin/hapus_absensi/' . $a['id_absensi']); ?>" class="btn badge btn-danger   ">Hapus</a>
                                    </td>
                                    <td><?= $a['nama']; ?></td>
                                    <td><?= $a['jabatan']; ?></td>
                                    <td><?= $a['tanggal']; ?></td>
                                    <td><?= $a['keterangan']; ?></td>

                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/absensi'); ?>" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <select name="id_pengguna" class="form-control">
                            <option value="0">* Pilih Nama Pegawai...</option>
                            <?php foreach ($pengguna as $p) : ?>
                                <option value="<?= $p['id_pengguna']; ?>"><?= $p['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="tanggal" placeholder="Tanggal...">
                    </div>
                    <div class="form-group">
                        <select name="keterangan" class="form-control">
                            <option value="tanpa keterangan">* Pilih Keterangan...</option>
                            <option value="hadir">Hadir</option>
                            <option value="izin">Izin</option>
                            <option value="sakit">Sakit</option>
                            <option value="tidak hadir">tidak hadir</option>
                            <option value="lainnya">Lainnya</option>

                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>