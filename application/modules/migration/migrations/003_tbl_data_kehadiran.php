<?php

class Migration_Tbl_data_kehadiran extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id_kehadiran' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'bulan' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'nik' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'nama_pegawai' => array(
                'type' => 'VARCHAR',
                'constraint' => '225',
            ),
            'jenis_kelamin' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'nama_jabatan' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'hadir' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'sakit' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'alpha' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
        ));
        $this->dbforge->add_key('id_kehadiran', TRUE);
        $this->dbforge->create_table('tbl_data_kehadiran');
    }

    public function down()
    {
        $this->dbforge->drop_table('tbl_data_kehadiran');
    }
}
