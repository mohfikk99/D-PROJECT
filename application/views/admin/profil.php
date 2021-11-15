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
                <img src="<?= base_url('assets/') ?>images/gambar/undraw_our_neighborhood_ymr4.svg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 py-5">
                <div class="row">
                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services border text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-plus"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading">Data Profil Kantor</h3>
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#kantorModal">
                                    Tambahkan
                                </button>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services border text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="icon-plus"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading">Data Profil Desa</h3>
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#desaModal">
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
            <div class="col-md-6  ftco-animate">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr>
                                <th>No</th>
                                <th>Pilihan</th>
                                <th>Jenis Gambar</th>
                                <th>Gambar</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($profil_kantor_desa as $a) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td>
                                        <a href="<?= base_url('pengaturan_admin/hapus_profil_kantor_desa/' . $a['id_profil_kantor_desa']); ?>" class="btn badge btn-danger   ">Hapus</a>
                                    </td>
                                    <td><?= $a['jenis']; ?></td>
                                    <td>
                                        <img src="<?= base_url('assets/images/desa/' . $a['gambar']); ?>" height="45px" alt="">
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6 ftco-animate">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr>
                                <th>No</th>
                                <th>Pilihan</th>
                                <th>Total Dusun</th>
                                <th>Jumlah Penduduk</th>
                                <th>Luas Area</th>
                                <th>Letak Geografis</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($profil_desa as $a) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td>
                                        <a href="<?= base_url('pengaturan_admin/hapus_profil_desa/' . $a['id_profil_desa']); ?>" class="btn badge btn-danger   ">Hapus</a>
                                    </td>
                                    <td><?= $a['total_dusun']; ?></td>
                                    <td><?= $a['jumlah_penduduk']; ?></td>
                                    <td><?= $a['luas_area']; ?></td>
                                    <td><?= $a['letak_geografis']; ?></td>

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
<div class="modal fade" id="desaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/profil'); ?>" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <input type="number" class="form-control" name="total_dusun" placeholder="Total Dusun...">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="jumlah_penduduk" placeholder="Jumlah Penduduk...">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="luas_area" placeholder="Luas Area...">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="letak_geografis" placeholder="Letak Georafis...">
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


<!-- Modal -->
<div class="modal fade" id="kantorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('admin/profil_kantor'); ?>
            <form action="<?= base_url('admin/profil_kantor'); ?>" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <select name="jenis" class="form-control" required>
                            <option value="tanpa keterangan">* Pilih Jenis Gambar...</option>
                            <option value="kepala desa">Kepala Desa</option>
                            <option value="pegawai">Pegawai</option>
                            <option value="warga desa">warga desa</option>
                            <option value="struktur">Struktur Organisasi</option>
                            <option value="kantor">Kantor</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="gambar" placeholder="Gambar..." required>
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