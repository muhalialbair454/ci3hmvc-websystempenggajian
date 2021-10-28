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
            <a href="<?php echo site_url("admin/listdatajabatan/addlistdatajabatan"); ?>" id="btntambahdata" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Jabatan</th>
                            <th class="text-center">Gaji Pokok</th>
                            <th class="text-center">Tunjangan Transport</th>
                            <th class="text-center">Uang Makan</th>
                            <th class="text-center" colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($getAllDataJabatan as $allDataJabatan) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $allDataJabatan->nama_jabatan; ?></td>
                                <td><?php echo number_format($allDataJabatan->gaji_pokok, 0, ",", "."); ?></td>
                                <td><?php echo number_format($allDataJabatan->tunjangan_transport, 0, ",", "."); ?></td>
                                <td><?php echo number_format($allDataJabatan->uang_makan, 0, ",", "."); ?></td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo site_url("admin/listdatajabatan/editlistdatajabatan/" . $allDataJabatan->id_jabatan); ?>"><i class="fas fa-edit"></i></a>
                                    </center>

                                </td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');" href="<?php echo site_url("admin/listdatajabatan/deletelistdatajabatan/" . $allDataJabatan->id_jabatan); ?>"><i class="fas fa-trash"></i></a>
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