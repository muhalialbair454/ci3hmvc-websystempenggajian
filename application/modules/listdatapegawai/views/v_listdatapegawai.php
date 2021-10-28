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
            <a href="<?php echo site_url("admin/listdatapegawai/addlistdatapegawai"); ?>" id="$btntambahdata" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">NIK</th>
                            <th class="text-center">Nama Pegawai</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Password</th>
                            <th class="text-center">Jenis Kelamin</th>
                            <th class="text-center">Jabatan</th>
                            <th class="text-center">Tanggal Masuk</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Foto</th>
                            <th class="text-center">Hak Akses</th>
                            <th class="text-center" colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($getAllDataPegawai as $allDataPegawai) : ?>
                            <tr class="">
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $allDataPegawai->nik; ?></td>
                                <td><?php echo $allDataPegawai->nama_pegawai; ?></td>
                                <td><?php echo $allDataPegawai->username; ?></td>
                                <td><?php echo md5($allDataPegawai->password); ?></td>
                                <td><?php echo $allDataPegawai->jenis_kelamin; ?></td>
                                <td><?php echo $allDataPegawai->nama_jabatan; ?></td>
                                <td><?php echo $allDataPegawai->tanggal_masuk; ?></td>
                                <td><?php echo $allDataPegawai->status; ?></td>
                                <td><img src="<?php echo base_url() . 'assets/images/' . $allDataPegawai->foto ?>" width="75px" alt="<?php echo $allDataPegawai->foto; ?>"></td>
                                <?php if ($allDataPegawai->hak_akses == '1') {
                                    echo "<td>Admin</td>";
                                } else {
                                    echo "<td>Pegawai</td>";
                                } ?>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo site_url("admin/listdatapegawai/editlistdatapegawai/" . $allDataPegawai->id_pegawai) ?>"><i class="fas fa-edit"></i></a>
                                    </center>

                                </td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');" href="<?php echo site_url("admin/listdatapegawai/deletelistdatapegawai/" . $allDataPegawai->id_pegawai) ?>"><i class="fas fa-trash"></i></a>
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