    <!-- Main Content -->
    <div class="card">
        <div class="card-header bg-primary text-white text-center">
            Filter Laporan Absensi
        </div>
        <form action="<?php echo site_url("laporanabsensi/printlaporanabsensi"); ?>" method="GET" name="" id="" class="">
            <div class="card-body">
                <div class="form-group row">
                    <label for="ddbulan" class="col-sm-3 col-form-label">Bulan</label>
                    <div class="col-sm-9">
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
                </div>
                <div class="form-group row">
                    <label for="ddtahun" class="col-sm-3 col-form-label">Tahun</label>
                    <div class="col-sm-9">
                        <select name="ddtahun" id="ddtahun" class="form-control">
                            <option value="">---Pilih Tahun---</option>
                            <?php
                            $tahun = date('Y');
                            for ($i = 2021; $i < $tahun + 5; $i++) { ?>
                                <option value="<?php echo $i ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <button style="width: 100%;" type="submit" class="btn btn-primary"><i class="fas fa-print"></i> Cetak Laporan Absensi</button>
            </div>
        </form>
    </div>
    <!-- End Main Content -->