    <!-- Main Content -->
    <div class="card">
        <div class="card-header bg-primary text-white">
            Input Absensi Pegawai
        </div>
        <div class="card-body">
            <form action="" class="form-inline">
                <div class="form-group mr-3">
                    <label for="ddbulan">Bulan:</label>
                    <select name="ddbulan" id="ddbulan" class="form-control">
                        <option value="">---Pilih Bulan---</option>
                        <option value="01">Januari</option>
                        <option value="02">Febuari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ddtahun">Tahun:</label>
                    <select name="ddtahun" id="ddtahun" class="form-control">
                        <option value="">---Pilih Tahun---</option>
                        <?php
                        $tahun = date('Y');
                        for ($i = 2021; $i < $tahun + 5; $i++) { ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary ml-auto"><i class="fas fa-eye"></i> Generate</button>
            </form>
        </div>
    </div>

    <?php
    if ((isset($_GET['ddbulan']) && $_GET['ddbulan'] != '') && (isset($_GET['ddtahun']) && $_GET['ddtahun'] != '')) {
        $bulan = $_GET['ddbulan'];
        $tahun = $_GET['ddtahun'];
        $bulantahun = $bulan . $tahun;
    } else {
        $bulan = date('m');
        $tahun = date('Y');
        $bulantahun = $bulan . $tahun;
    }
    ?>

    <div class="alert alert-info mt-3">
        Menampilkan Data Kehadiran Pegawai Bulan: <span class="font-weight-bold"><?php echo $bulan; ?></span> Tahun: <span class="font-weight-bold"><?php echo $tahun; ?></span>
    </div>

    <form method="POST">
        <button class=" btn btn-success mb-3" type="submit" name="submit" value="submit">Simpan</button>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">NIK</th>
                        <th class="text-center">Nama Pegawai</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">Jabatan</th>
                        <th class="text-center" width="8%">Hadir</th>
                        <th class="text-center" width="8%">Sakit</th>
                        <th class="text-center" width="8%">Alpha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($getDataAbsensi as $dataAbsensi) : ?>
                        <tr>
                            <input type="hidden" name="txtbulan[]" class="form-control" value="<?php echo $bulantahun; ?>">
                            <input type="hidden" name="nik[]" class="form-control" value="<?php echo $dataAbsensi->nik; ?>">
                            <input type="hidden" name="nama_pegawai[]" class="form-control" value="<?php echo $dataAbsensi->nama_pegawai; ?>">
                            <input type="hidden" name="jenis_kelamin[]" class="form-control" value="<?php echo $dataAbsensi->jenis_kelamin; ?>">
                            <input type="hidden" name="nama_jabatan[]" class="form-control" value="<?php echo $dataAbsensi->nama_jabatan; ?>">
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $dataAbsensi->nik; ?></td>
                            <td><?php echo $dataAbsensi->nama_pegawai; ?></td>
                            <td><?php echo $dataAbsensi->jenis_kelamin; ?></td>
                            <td><?php echo $dataAbsensi->nama_jabatan; ?></td>
                            <td><input type="number" name="txthadir[]" class="form-control" value="0"></td>
                            <td><input type="number" name="txtsakit[]" class="form-control" value="0"></td>
                            <td><input type="number" name="txtalpha[]" class="form-control" value="0"></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </form>
    <!-- End Main Content -->