    <!-- Main Content-->
    <div class="card">
        <div class="card-body">
            <form action="<?php echo site_url("admin/listdatapegawai/updateaddlistdatapegawai"); ?>" method="POST" name="formaddlistdatapegawai" id="formaddlistdatapegawai" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="txtnik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtnik" id="txtnik" class="form-control" placeholder="Masukan NIK" value="<?php echo set_value("txtnik"); ?>">
                        <div class="form-error">
                            <?php echo form_error("txtnik"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtnamapegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtnamapegawai" id="txtnamapegawai" class="form-control" placeholder="Masukan Nama Pegawai" value="<?php echo set_value("txtnamapegawai"); ?>">
                        <div class="form-error">
                            <?php echo form_error("txtnamapegawai"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtusername" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtusername" id="txtusername" class="form-control" placeholder="Masuk Username" value="<?php echo set_value("txtusername"); ?>">
                        <div class="form-error">
                            <?php echo form_error("txtusername"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ppassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="ppassword" id="ppassword" class="form-control" placeholder="Masukan Password" value="<?php echo set_value("ppassword"); ?>">
                        <div class="form-error">
                            <?php echo form_error("ppassword"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ddjeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="ddjeniskelamin" id="ddjeniskelamin" class="form-control">
                            <?php $oldValue = set_value("ddjeniskelamin"); ?>
                            <option value="">---Pilih Jenis Kelamin---</option>
                            <option value="laki-laki" <?php if ($oldValue == "laki-laki") {
                                                            echo "selected";
                                                        } ?>>Laki-Laki</option>
                            <option value="perempuan" <?php if ($oldValue == "perempuan") {
                                                            echo "selected";
                                                        } ?>>Perempuan</option>
                            <div class="form-error">
                                <?php echo form_error("ddjeniskelamin"); ?>
                            </div>
                        </select>
                    </div>
                </div>
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
                    <label for="dtanggalmasuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                        <input type="date" name="dtanggalmasuk" id="dtanggalmasuk" class="form-control" placeholder="Masukkan Tanggal Masuk" value="<?php echo set_value("dtanggalmasuk"); ?>">
                        <div class="form-error">
                            <?php echo form_error("dtanggalmasuk"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ddstatus" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="ddstatus" id="ddstatus" class="form-control">
                            <?php $oldValue = set_value("ddstatus"); ?>
                            <option value="">--Pilih Status--</option>
                            <option value="permanen" <?php if ($oldValue == "permanen") {
                                                            echo "selected";
                                                        } ?>>Permanen</option>
                            <option value="probation" <?php if ($oldValue == "probation") {
                                                            echo "selected";
                                                        } ?>>Probation</option>
                            <option value="outsource" <?php if ($oldValue == "outsource") {
                                                            echo "selected";
                                                        } ?>>Outsource</option>
                            <div class="form-error">
                                <?php echo form_error("ddstatus"); ?>
                            </div>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ffoto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" name="ffoto" id="ffoto" class="form-control" placeholder="Masukan Foto" value="<?php echo set_value("ffoto"); ?>">
                        <div class="form-error">
                            <?php echo form_error("ffoto"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ddhakakses" class="col-sm-2 col-form-label">Hak Akses</label>
                    <div class="col-sm-10">
                        <select name="ddhakakses" id="ddhakakses" class="form-control">
                            <?php $oldValue = set_value("ddhakakses"); ?>
                            <option value="">--Pilih Hak Akses--</option>
                            <option value="1" <?php if ($oldValue == "1") {
                                                    echo "selected";
                                                } ?>>Admin</option>
                            <option value="2" <?php if ($oldValue == "2") {
                                                    echo "selected";
                                                } ?>>Pegawai</option>
                        </select>
                        <div class="form-error">
                            <?php echo form_error("ddhakakses"); ?>
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