    <!-- Main Content-->
    <div class="card">
        <div class="card-body">

            <form action="<?php echo site_url("pegawai/updategantipasswordpegawai"); ?>" method="POST" name="formgantipassword" id="formgantipassword">

                <div class="form-group row">
                    <label for="ppasswordbaru1" class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-10">
                        <input type="password" name="ppasswordbaru1" id="ppasswordbaru1" class="form-control" placeholder="Masukan Password Baru" value="<?php echo set_value("ppasswordbaru1"); ?>">
                        <div class="form-error">
                            <?php echo form_error("ppasswordbaru1"); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ppasswordbaru2" class="col-sm-2 col-form-label">Ulangi Password Baru</label>
                    <div class="col-sm-10">
                        <input type="password" name="ppasswordbaru2" id="ppasswordbaru2" class="form-control" placeholder="Masukan Ulangi Password Baru" value="<?php echo set_value("ppasswordbaru2"); ?>">
                        <div class="form-error">
                            <?php echo form_error("ppasswordbaru2"); ?>
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