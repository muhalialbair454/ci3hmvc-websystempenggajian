<?php

class Migration_Tbl_potongan_gaji extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id_potongangaji' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'jenis_potongan' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'jumlah_potongan' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
        ));
        $this->dbforge->add_key('id_potongangaji', TRUE);
        $this->dbforge->create_table('tbl_potongan_gaji');
    }

    public function down()
    {
        $this->dbforge->drop_table('tbl_potongan_gaji');
    }
}
