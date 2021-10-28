    <!-- Main Content-->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Bulan/Tahun</th>
                            <th class="text-center">Gaji Pokok</th>
                            <th class="text-center">Tunjangan Transport</th>
                            <th class="text-center">Uang Makan</th>
                            <th class="text-center">Potongan</th>
                            <th class="text-center">Total Gaji</th>
                            <th class="text-center">Cetak Slip</th>
                        </tr>

                    </thead>
                    <?php foreach ($getAllSettingPotonganGaji as $allSettingPotongGaji) : ?>
                        <?php $potongan = $allSettingPotongGaji->jumlah_potongan; ?>
                    <?php endforeach; ?>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($getDataGaji as $dataGaji) : ?>
                            <?php $potonganGaji = $dataGaji->alpha * $potongan; ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $dataGaji->bulan; ?></td>
                                <td><?php echo number_format($dataGaji->gaji_pokok, 0, ",", "."); ?></td>
                                <td><?php echo number_format($dataGaji->tunjangan_transport, 0, ",", "."); ?></td>
                                <td><?php echo number_format($dataGaji->uang_makan, 0, ",", "."); ?></td>
                                <td><?php echo number_format($potonganGaji, 0, ",", "."); ?></td>
                                <td><?php echo number_format($dataGaji->gaji_pokok + $dataGaji->tunjangan_transport + $dataGaji->uang_makan - $potonganGaji, 0, ",", "."); ?></td>
                                <td>
                                    <center>
                                        <a href="<?php echo site_url("pegawai/printdatagaji/" . $dataGaji->id_kehadiran); ?>" class="btn btn-sm btn-primary"><i class="fas fa-print"></i> </a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Main Content-->