<!-- Main Content -->
<div class="card">
    <div class="card-header bg-primary text-white">
        Filter List Data Gaji Pegawai
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

            <button type="submit" class="btn btn-primary ml-auto"><i class="fas fa-eye"></i> Tampilkan Data</button>

            <?php if (count($getAllDataGaji) > 0) { ?>
                <a href="<?php echo site_url('admin/listdatagaji/printlistdatagaji?ddbulan=' . $bulan), '&ddtahun=' . $tahun; ?>" class="btn btn-success ml-3"><i class="fas fa-solid fa-print"></i> Cetak List Data Gaji</a>
            <?php } else { ?>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success ml-3" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-solid fa-print"></i> Cetak List Data Gaji
                </button>
            <?php } ?>
        </form>
    </div>
</div>



<div class="alert alert-info mt-3">
    Menampilkan List Data Gaji Pegawai Bulan: <span class="font-weight-bold"><?php echo $bulan ?></span> Tahun: <span class="font-weight-bold"><?php echo $tahun ?></span>
</div>

<?php
$jml_data = count($getAllDataGaji);
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

<?php } else { ?>
    <span class="badge badge-danger"><i class="fas fa-info-circle"></i> Data absensi masih kosong, silahkan input data kehadiran pada bulan dan tahun yang Anda pilih !</span>
<?php } ?>
<!-- End Main Content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Data gaji masih kosong. silahkan input absensi terlebih dahulu pada bulan dan tahun yang Anda pilih.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End-Modal -->