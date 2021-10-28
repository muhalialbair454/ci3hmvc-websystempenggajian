<?php

class Migration_Tbl_data_jabatan extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id_jabatan' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'nama_jabatan' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'gaji_pokok' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'tunjangan_transport' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'uang_makan' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
        ));
        $this->dbforge->add_key('id_jabatan', TRUE);
        $this->dbforge->create_table('tbl_data_jabatan');
    }

    public function down()
    {
        $this->dbforge->drop_table('tbl_data_jabatan');
    }
}
