<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h3 class="mb-4"> <strong>Tabel Semua Data</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Aktivitas Harian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($semua_data as $a) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $a['nama']; ?></td>
                                    <td><?= $a['jabatan']; ?></td>
                                    <td><?= $a['tanggal']; ?></td>
                                    <td><?= $a['keterangan']; ?></td>
                                    <?php
                                    $id_absensi = $a['id_absensi'];

                                    $query = "SELECT *
                                                FROM aktivitas JOIN absensi
                                                ON aktivitas.id_absensi = absensi.id_absensi
                                                WHERE aktivitas.id_absensi = '$id_absensi'
                                                ORDER BY id_aktivitas
                                                ";
                                    $aktivitas = $this->db->query($query)->result_array();

                                    foreach ($aktivitas as $aktiv) :
                                    ?>
                                        <td><?= $aktiv['aktivitas_harian']; ?></td>
                                    <?php endforeach; ?>
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