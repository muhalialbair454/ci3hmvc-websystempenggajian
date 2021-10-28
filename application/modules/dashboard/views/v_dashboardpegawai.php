    <!-- Main Content-->
    <div class="alert alert-success font-weight-bold mb-4" style="width: 65%;">
        Selamat datang, Anda login sebagai pegawai.
    </div>

    <div class="card" style="margin-bottom: 120px; width: 65%;">
        <div class="card-header font-weight-bold bg-primary text-white">
            Data Pegawai
        </div>
        <?php foreach ($getDataPegawai as $dataPegawai) : ?>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img style="width: 200px;" src="<?php echo base_url('assets/images/' . $dataPegawai->foto); ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <th>NIK</th>
                                <td>:</td>
                                <td><?php echo $dataPegawai->nik; ?></td>
                            </tr>
                            <tr>
                                <th>Nama Pegawai</th>
                                <td>:</td>
                                <td><?php echo $dataPegawai->nama_pegawai; ?></td>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <td>:</td>
                                <td><?php echo $dataPegawai->nama_jabatan; ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Masuk</th>
                                <td>:</td>
                                <td><?php echo $dataPegawai->tanggal_masuk; ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>:</td>
                                <td><?php echo $dataPegawai->status; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- End Main Content-->