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
                <img src="<?= base_url('assets/') ?>images/gambar/undraw_New_entries_re_cffr.svg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 py-5">
                <div class="row">


                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services border text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-users"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading"><?= $total; ?></h3>
                                <p>Total Data Pengguna</p>
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
                <h3 class="mb-4"> <strong>Tabel Data Pengguna</strong></h3>
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
                                <th>ID Pegawai</th>
                                <th>Nama</th>
                                <th>Password</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pengguna as $p) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td>
                                        <a href="<?= base_url('pengaturan_admin/edit_pengguna/' . $p['id_pengguna']); ?>" class="btn badge btn-warning">Ubah</a>
                                        <a href="<?= base_url('pengaturan_admin/hapus_pengguna/' . $p['id_pengguna']); ?>" class="btn badge btn-danger   ">Hapus</a>
                                    </td>
                                    <td><?= $p['id_pengguna']; ?></td>
                                    <td><?= $p['nama']; ?></td>
                                    <td><?= $p['password']; ?></td>
                                    <td><?= $p['alamat']; ?></td>
                                    <td><?= $p['telepon']; ?></td>
                                    <td><?= $p['jabatan']; ?></td>
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
            <form action="<?= base_url('admin'); ?>" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <input type="text" class="form-control" name="id_pengguna" placeholder="Id Pegawai..." maxlength="12" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Nama...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="Password...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="telepon" placeholder="No Telepon...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="level" value="user" hidden>
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