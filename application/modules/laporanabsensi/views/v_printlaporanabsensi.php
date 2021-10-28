<!-- Load Styles -->
<?php $this->load->view('include/load-styles'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Main Content -->
    <center>
        <h1>PT. JAKARTA RAYA</h1>
        <h2>Laporan Kehadiran Pegawai</h2>
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

    <table class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>NIK</th>
            <th>Jabatan</th>
            <th>Hadir</th>
            <th>Sakit</th>
            <th>Alpha</th>
        </tr>

        <?php
        $no = 1;
        foreach ($getAllDataAbsensi as $allDataAbsensi) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $allDataAbsensi->nama_pegawai; ?></td>
                <td><?php echo $allDataAbsensi->nik; ?></td>
                <td><?php echo $allDataAbsensi->nama_jabatan; ?></td>
                <td><?php echo $allDataAbsensi->hadir; ?></td>
                <td><?php echo $allDataAbsensi->sakit; ?></td>
                <td><?php echo $allDataAbsensi->alpha; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <!-- End Main Content -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Load Styles -->
<?php $this->load->view('include/load-scripts'); ?>