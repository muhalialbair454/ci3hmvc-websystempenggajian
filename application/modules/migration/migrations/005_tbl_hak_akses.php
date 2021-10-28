<?php

class Migration_Tbl_hak_akses extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id_hakakses' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'keterangan' => array(
                'type' => 'VARCHAR',
                'constraint' => '50'
            ),
            'hak_akses' => array(
                'type' => 'INT',
                'constraint' => 11,
            )
        ));
        $this->dbforge->add_key('id_hakakses', TRUE);
        $this->dbforge->create_table('tbl_hak_akses');
    }

    public function down()
    {
        $this->dbforge->drop_table('tbl_hak_akses');
    }
}
