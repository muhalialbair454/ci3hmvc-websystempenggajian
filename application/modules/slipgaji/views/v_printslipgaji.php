<!-- Load Styles -->
<?php $this->load->view("include/load-styles"); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Main Content -->
    <center>
        <h1>PT. JAKARTA RAYA</h1>
        <h2>Slip Gaji Pegawai</h2>
        <hr style="width: 50%; border-width: 5px; color: black;">
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

    <?php
    foreach ($datasettingpotongangaji as $settinganpotongangaji) :
        $potongan = $settinganpotongangaji->jumlah_potongan;
    // echo "$potongan";
    endforeach; ?>

    <?php
    $no = 1;
    foreach ($dataslipgaji as $slipgaji) : ?>
        <?php $potonganGaji = $slipgaji->alpha * $potongan; ?>
        <table style="width: 100%;">
            <tr>
                <td width="20%">Nama Pegawai</td>
                <td width="2%">:</td>
                <td><?php echo $slipgaji->nama_pegawai; ?></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><?php echo $slipgaji->nik; ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?php echo $slipgaji->nama_jabatan; ?></td>
            </tr>
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

        <div class="table-responsive mt-3">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center" width="5%">No</th>
                        <th class="text-center">Keterangan</th>
                        <th class="text-center">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Gaji Pokok</td>
                        <td>Rp. <?php echo number_format($slipgaji->gaji_pokok, 0, ",", "."); ?></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Tunjangan Transport</td>
                        <td>Rp. <?php echo number_format($slipgaji->tunjangan_transport, 0, ",", "."); ?></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Uang Makan</td>
                        <td>Rp. <?php echo number_format($slipgaji->uang_makan, 0, ",", "."); ?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Potongan</td>
                        <td>Rp. <?php echo number_format($potonganGaji, 0, ",", "."); ?></td>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align: right;">Total Gaji</th>
                        <th>Rp. <?php echo number_format($slipgaji->gaji_pokok + $slipgaji->tunjangan_transport + $slipgaji->uang_makan - $potonganGaji); ?></th>
                    </tr>
                </tbody>
            </table>
        </div>

        <table width="100%">
            <tr>
                <td></td>
                <td>
                    <p>Pegawai</p>
                    <br>
                    <br>
                    <p class="font-weight-bold"><?php echo $slipgaji->nama_pegawai; ?></p>
                </td>
                <td width="200px">
                    <p>Jakarta, <?php echo date("d M Y"); ?> <br> Finance</p>
                    <br>
                    <br>
                    <p>_____________________</p>
                </td>
            </tr>
        </table>
    <?php endforeach; ?>
    <!-- End Main Content -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Load Scripts -->
<?php $this->load->view("include/load-scripts"); ?>