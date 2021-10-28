<!-- Load Style -->
<?php $this->load->view("include/load-styles"); ?>

<title><?php echo $title; ?></title>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Main Content -->
    <center>
        <h1>PT. JAKARTA RAYA</h1>
        <h2>Daftar Gaji Pegawai</h2>
    </center>

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

    <table class="mb-3">
        <tr>
            <td>Bulan</td>
            <td>:</td>
            <td><?php echo $bulan; ?></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>:</td>
            <td><?php echo $tahun; ?></td>
        </tr>
    </table>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">NIK</th>
                    <th class="text-center">Nama Pegawai</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Nama Jabatan</th>
                    <th class="text-center">Gaji Pokok</th>
                    <th class="text-center">Tunjangan Transport</th>
                    <th class="text-center">Uang Makan</th>
                    <th class="text-center">Potongan</th>
                    <th class="text-center">Total Gaji</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($getAllSettingPotonganGaji as $allSettingPotonganGaji) {
                    $alpha = $allSettingPotonganGaji->jumlah_potongan;
                    // echo "$alpha";
                } ?>
                <?php
                $no = 1;
                foreach ($getAllDataGaji as $allDataGaji) : ?>
                    <?php $potongan = $allDataGaji->alpha * $alpha ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $allDataGaji->nik; ?></td>
                        <td><?php echo $allDataGaji->nama_pegawai; ?></td>
                        <td><?php echo $allDataGaji->jenis_kelamin; ?></td>
                        <td><?php echo $allDataGaji->nama_jabatan; ?></td>
                        <td>Rp. <?php echo number_format($allDataGaji->gaji_pokok, 0, ",", ".");  ?></td>
                        <td>Rp. <?php echo number_format($allDataGaji->tunjangan_transport, 0, ",", "."); ?></td>
                        <td>Rp. <?php echo number_format($allDataGaji->uang_makan, 0, ",", "."); ?></td>
                        <td>Rp. <?php echo number_format($potongan, 0, ",", "."); ?></td>
                        <td>Rp. <?php echo number_format($allDataGaji->gaji_pokok + $allDataGaji->tunjangan_transport + $allDataGaji->uang_makan - $potongan); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <table class="mt-3">
        <tr>
            <td></td>
            <td width="200px">
                <p>Jakarta, <?php echo date('d M Y'); ?> <br> Finance</p>
                <br>
                <br>
                <p>_______________________</p>
            </td>
        </tr>
    </table>
    <!-- End Main Content -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Load Script -->
<?php $this->load->view("include/load-scripts"); ?>