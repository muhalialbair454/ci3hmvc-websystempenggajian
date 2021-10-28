    <?php if ($this->session->flashdata("success")) { ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata("success"); ?>
        </div>
    <?php }
    if ($this->session->flashdata("error")) { ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata("error"); ?>
        </div>
    <?php } ?>

    <!-- Main Content -->
    <div class="card">
        <div class="card-header bg-primary text-white">
            Filter List Data Absensi Pegawai
        </div>
        <div class="card-body">
            <form action="" class="form-inline">
                <div class="form-group mr-3">
                    <label for="ddbulan" class="mr-3">Bulan</label>
                    <select name="ddbulan" id="ddbulan" class="form-control">
                        <option value="">--Pilih Bulan--</option>
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
                    <label for="ddtahun" class="mr-3">Tahun</label>
                    <select name="ddtahun" id="ddtahun" class="form-control">
                        <option value="">--Pilih Tahun--</option>
                        <?php
                        $tahun = date('Y');
                        for ($i = 2021; $i < $tahun + 5; $i++) { ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary ml-auto"><i class="fas fa-eye"></i> Tampilkan Data</button>
                <a href="<?php echo site_url('admin/listdataabsensi/addlistdataabsensi'); ?>" class="btn btn-success ml-3"><i class="fas fa-plus"></i> Input Kehadiran</a>
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
        Menampilkan List Data Kehadiran Pegawai Bulan: <span class="font-weight-bold"><?php echo $bulan ?></span> Tahun: <span class="font-weight-bold"><?php echo $tahun ?></span>
    </div>

    <?php
    $jml_data = count($getAllDataAbsensi);
    if ($jml_data > 0) { ?>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">NIK</th>
                        <th class="text-center">Nama Pegawai</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">Nama Jabatan</th>
                        <th class="text-center">Hadir</th>
                        <th class="text-center">Sakit</th>
                        <th class="text-center">Alpha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($getAllDataAbsensi as $allDataAbsensi) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $allDataAbsensi->nik; ?></td>
                            <td><?php echo $allDataAbsensi->nama_pegawai; ?></td>
                            <td><?php echo $allDataAbsensi->jenis_kelamin; ?></td>
                            <td><?php echo $allDataAbsensi->nama_jabatan; ?></td>
                            <td><?php echo $allDataAbsensi->hadir; ?></td>
                            <td><?php echo $allDataAbsensi->sakit; ?></td>
                            <td><?php echo $allDataAbsensi->alpha; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    <?php } else { ?>
        <span class="badge badge-danger"><i class="fas fa-info-circle"></i> Data masih kosong, silahkan input data kehadiran pada bulan dan tahun yang Anda pilih !</span>
    <?php } ?>
    <!-- End Main Content-->