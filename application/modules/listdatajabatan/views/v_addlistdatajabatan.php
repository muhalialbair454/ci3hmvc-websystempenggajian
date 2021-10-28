    <!-- Main Content-->
    <div class="card">
        <div class="card-body">

            <form action="<?php echo site_url("listdatajabatan/updateaddlistdatajabatan"); ?>" method="POST" name="formaddlistdatajabatan" id="formaddlistdatajabatan">

                <div class="form-group row">
                    <label for="txtnamajabatan" class="col-sm-2 col-form-label">Nama Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtnamajabatan" id="txtnamajabatan" class="form-control" placeholder="Masukan Nama Jabatan" value="<?php echo set_value("txtnamajabatan"); ?>">
                        <div class="form-error">
                            <?php echo form_error("txtnamajabatan"); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="txtgajipokok" class="col-sm-2 col-form-label">Gaji Pokok</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtgajipokok" id="txtgajipokok" class="form-control" placeholder="Masukan Gaji Pokok" value="<?php echo set_value("txtgajipokok"); ?>">
                        <div class="form-error">
                            <?php echo form_error("txtgajipokok"); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="txttunjangantransport" class="col-sm-2 col-form-label">Tunjangan Transport</label>
                    <div class="col-sm-10">
                        <input type="text" name="txttunjangantransport" id="txttunjangantransport" class="form-control" placeholder="Masukan Tunjangan Transport" value="<?php echo set_value("txttunjangantransport"); ?>">
                        <div class="form-error">
                            <?php echo form_error("txttunjangantransport"); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="txtuangmakan" class="col-sm-2 col-form-label">Uang Makan</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtuangmakan" id="txtuangmakan" class="form-control" placeholder="Masukan Uang Makan" value="<?php echo set_value("txtuangmakan"); ?>">
                        <div class="form-error">
                            <?php echo form_error("txtuangmakan"); ?>
                        </div>
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" name="btnsave" id="btnsave" class="btn btn-primary">Save</button>
                </div>

            </form>

        </div>
    </div>
    <!-- End Main Content-->