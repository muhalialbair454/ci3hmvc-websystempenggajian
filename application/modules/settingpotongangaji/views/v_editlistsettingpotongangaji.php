    <!-- Main Content-->
    <div class="card">
        <div class="card-body">
            <form action="<?php echo site_url("settingpotongangaji/updateeditlistsettingpotongangaji"); ?>" method="POST" name="formeditlistsettingpotongangaji" id="formeditlistsettingpotongangaji">
                <input type="hidden" name="txtidpotongangaji" id="txtidpotongangaji" class="form-control" placeholder="Masukkan Id Potongan Gaji" value="<?php echo $getSettingPotonganGaji->id_potongangaji ?>">
                <div class="form-group row">
                    <label for="txtjenispotongan" class="col-sm-2 col-form-label">Jenis Potongan</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtjenispotongan" id="txtjenispotongan" class="form-control" placeholder="Masukan Jenis Potongan" value="<?php echo $getSettingPotonganGaji->jenis_potongan; ?>">
                        <div class="form-error">
                            <?php echo form_error("txtjenispotongan"); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtjumlahpotongan" class="col-sm-2 col-form-label">Jumlah Potongan</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtjumlahpotongan" id="txtjumlahpotongan" class="form-control" placeholder="Masukan Jumlah Potongan" value="<?php echo $getSettingPotonganGaji->jumlah_potongan; ?>">
                        <div class="form-error">
                            <?php echo form_error("txtjumlahpotongan"); ?>
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