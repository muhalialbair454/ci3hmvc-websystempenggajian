    <!-- Main Content-->
    <div class="card">
        <card class="card-body">

            <form action="<?php echo site_url("admin/listdatajabatan/updateeditlistdatajabatan") ?>" method="POST" name="formeditlistdatajabatan" id="formeditlistdatajabatan">

                <input type="hidden" name="txtidjabatan" id="txtidjabatan" class="form-control" placeholder="Masukan Id Jabatan" value="<?php echo $getDataJabatan->id_jabatan; ?>">

                <div class="form-group row">
                    <label for="txtnamajabatan" class="col-sm-2 col-form-label">Nama Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtnamajabatan" id="txtnamajabatan" class="form-control" placeholder="Masukan Nama Jabatan" value="<?php echo $getDataJabatan->nama_jabatan; ?>">
                        <div class="form-error">
                            <?php echo form_error("txtnamajabatan"); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="txtgajipokok" class="col-sm-2 col-form-label">Gaji Pokok</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtgajipokok" id="txtgajipokok" class="form-control" placeholder="Masukan Gaji Pokok" value="<?php echo $getDataJabatan->gaji_pokok; ?>">
                        <div class="form-error">
                            <?php echo form_error("txtgajipokok"); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="txttunjangantransport" class="col-sm-2 col-form-label">Tunjangan Transport</label>
                    <div class="col-sm-10">
                        <input type="text" name="txttunjangantransport" id="txttunjangantransport" class="form-control" placeholder="Masukan Tunjangan Transport" value="<?php echo $getDataJabatan->tunjangan_transport; ?>">
                        <div class="form-error">
                            <?php echo form_error("txttunjangantransport"); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="txtuangmakan" class="col-sm-2 col-form-label">Uang Makan</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtuangmakan" id="txtuangmakan" class="form-control" placeholder="Masukan Uang Makan" value="<?php echo $getDataJabatan->uang_makan; ?>">
                        <div class="form-error">
                            <?php echo form_error("txtuangmakan"); ?>
                        </div>
                    </div>
                </div>

                <div class="text-right">
                    <button name="btnsave" id="btnsave" class="btn btn-primary">Save</button>
                </div>

            </form>

        </card>
    </div>
    <!-- End Main Content-->