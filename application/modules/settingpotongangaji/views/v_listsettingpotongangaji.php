    <?php if ($this->session->flashdata("success")) { ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata("success"); ?>
        </div>
    <?php }
    if ($this->session->flashdata("error")) { ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata("error"); ?>
        </div>
    <?php } ?>

    <!-- Main Content-->
    <div class="card">
        <div class="card-body">
            <a href="<?php echo site_url("admin/settingpotongangaji/addlistsettingpotongangaji"); ?>" id="btntambahdata" class="btn btn-primary mb-3"> <i class="fas fa-plus"></i> Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Jenis Potongan</th>
                            <th class="text-center">Jumlah Potongan</th>
                            <th class="text-center" colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($getAllSettingPotonganGaji as $allSettingPotonganGaji) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $allSettingPotonganGaji->jenis_potongan; ?></td>
                                <td><?php echo $allSettingPotonganGaji->jumlah_potongan; ?></td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo site_url("settingpotongangaji/editlistsettingpotongangaji/" . $allSettingPotonganGaji->id_potongangaji); ?>"><i class="fas fa-edit"></i></a>
                                    </center>

                                </td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');" href="<?php echo site_url("admin/settingpotongangaji/deletelistsettingpotongangaji/" . $allSettingPotonganGaji->id_potongangaji); ?>"><i class="fas fa-trash"></i></a>
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