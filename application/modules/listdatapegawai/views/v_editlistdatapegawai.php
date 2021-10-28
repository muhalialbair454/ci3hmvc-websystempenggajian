    <!-- Main Content-->
    <div class="card">
        <div class="card-body">
            <form action="<?php echo site_url("admin/listdatapegawai/updateeditlistdatapegawai"); ?>" method="POST" name="formeditlistdatapegawai" id="formeditlistdatapegawai" enctype="multipart/form-data">
                <input type="hidden" name="txtidpegawai" id="txtidpegawai" class="form-control" value="<?php echo $getDatapegawai->id_pegawai; ?>">
                <div class="form-group row">
                    <label for="txtnik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtnik" id="txtnik" class="form-control" placeholder="Masukan NIK Anda" value="<?php echo $getDatapegawai->nik; ?>">
                        <div class="form-error">
                            <?php echo form_error("txtnik"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtnamapegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtnamapegawai" id="txtnamapegawai" class="form-control" placeholder="Masukan Nama Pegawai" value="<?php echo $getDatapegawai->nama_pegawai; ?>">
                        <div class="form-error">
                            <?php echo form_error("txtnamapegawai"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtusername" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtusername" id="txtusername" class="form-control" placeholder="Masukan Username" value="<?php echo $getDatapegawai->username; ?>">
                        <div class="form-error">
                            <?php echo form_error("txtusername"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ppassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="ppassword" id="ppassword" class="form-control" placeholder="Masukan Password" value="<?php echo md5($getDatapegawai->password); ?>">
                        <div class="form-error">
                            <?php echo form_error("ppassword"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ddjeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="ddjeniskelamin" id="ddjeniskelamin" class="form-control">
                            <option value="<?php echo $getDatapegawai->jenis_kelamin; ?>"><?php echo $getDatapegawai->jenis_kelamin; ?></option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        <div class="form-error">
                            <?php echo form_error("ppassword"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtnamajabatan" class="col-sm-2 col-form-label">Nama Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtnamajabatan" id="txtnamajabatan" class="form-control" placeholder="Masukan Nama Jabatan" value="<?php echo $getDatapegawai->nama_jabatan; ?>">
                        <div class="form-error">
                            <?php echo form_error("txtnamajabatan"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dtanggalmasuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                        <input type="date" name="dtanggalmasuk" id="dtanggalmasuk" class="form-control" placeholder="Masukan Tanggal Masuk" value="<?php echo $getDatapegawai->tanggal_masuk; ?>">
                        <div class="form-error">
                            <?php echo form_error("dtanggalmasuk"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ddstatus" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="ddstatus" id="ddstatus" class="form-control">
                            <option value="<?php echo $getDatapegawai->status; ?>"><?php echo $getDatapegawai->status; ?></option>
                            <option value="permanen">Permanen</option>
                            <option value="probation">Probation</option>
                            <option value="outsource">Outsource</option>
                        </select>
                        <div class="form-error">
                            <?php echo form_error("ddstatus"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ffoto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" name="ffoto" id="ffoto" class="form-control" placeholder="Masukan Foto" value="<?php echo $getDatapegawai->foto; ?>">
                        <div class="form-error">
                            <?php echo form_error("ffoto"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ddhakakses" class="col-sm-2 col-form-label">Hak Akses</label>
                    <div class="col-sm-10">
                        <select name="ddhakakses" id="ddhakakses" class="form-control">
                            <option value="<?php echo $getDatapegawai->hak_akses; ?>"><?php if ($getDatapegawai->hak_akses == '1') {
                                                                                            echo 'Admin';
                                                                                        } else {
                                                                                            echo 'Pegawai';
                                                                                        } ?></option>
                            <option value="1">Admin</option>
                            <option value="2">Pegawai</option>
                        </select>
                        <div class="form-error">
                            <?php echo form_error("ddhakakses"); ?>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button name="btnsave" id="btnsave" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Main Content-->