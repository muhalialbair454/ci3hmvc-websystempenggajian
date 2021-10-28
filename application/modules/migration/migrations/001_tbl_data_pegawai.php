<?php

class Migration_Tbl_data_pegawai extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id_pegawai' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'nik' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'nama_pegawai' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'jenis_kelamin' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'nama_jabatan' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'tanggal_masuk' => array(
                'type' => 'DATE',
            ),
            'status' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'foto' => array(
                'type' => 'VARCHAR',
                'constraint' => '225',
            ),
            'hak_akses' => array(
                'type' => 'INT',
                'constraint' => 11
            )
        ));
        $this->dbforge->add_key('id_pegawai', TRUE);
        $this->dbforge->create_table('tbl_data_pegawai');
    }

    public function down()
    {
        $this->dbforge->drop_table('tbl_data_pegawai');
    }
}
