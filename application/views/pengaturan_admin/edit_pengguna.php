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
                <?php foreach ($pengguna as $p) : ?>
                    <form action="<?= base_url('pengaturan_admin/update_pengguna'); ?>" method="POST">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="id_pengguna" value="<?= $p->id_pengguna; ?>">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $p->nama; ?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">password</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="password" name="password" value="<?= $p->password; ?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $p->alamat; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telepon" class="col-sm-2 col-form-label"> no telepon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $p->telepon; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jabatan" class="col-sm-2 col-form-label">jabatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $p->jabatan; ?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="level" class="col-sm-2 col-form-label">level</label>
                            <div class="col-sm-10">
                                <select name="level" class="form-control" id="level" required>
                                    <option value="<?= $p->level; ?>"><?= $p->level; ?></option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
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