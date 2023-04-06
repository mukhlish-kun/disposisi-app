<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Disposisi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'no_registrasi'         => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
            'tanggal_penerimaan'    => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'tanggal_penyelesaian'  => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'tingkat_keamanan'      => ['type' => 'tinyint', 'constraint' => 1, 'null' => 0, 'default' => 0],
            'tanggal_surat'         => ['type' => 'datetime', 'null' => true],
            'no_surat'              => ['type' => 'datetime', 'null' => true],
            'asal_surat'            => ['type' => 'datetime', 'null' => true],
            'ringkasan_isi_surat'   => ['type' => 'datetime', 'null' => true],
            'lampiran_surat'        => ['type' => 'datetime', 'null' => true],
            'isi_disposisi'         => ['type' => 'datetime', 'null' => true],
            'status'                => ['type' => 'datetime', 'null' => true],
            'paraf'                 => ['type' => 'datetime', 'null' => true],
            'created_by'            => ['type' => 'datetime', 'null' => true],
            'deleted_at'            => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addUniqueKey('no_registrasi');
        $this->forge->createTable('disposisi');

        $this->forge->addField([
            'disposisi_id'  => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'user_id'       => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
        ]);
        $this->forge->addForeignKey('disposisi_id', 'disposisi', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('user_id', 'user', 'id', '', 'CASCADE');
        $this->forge->createTable('penerima_disposisi');

        $this->forge->addField([
            'id'  => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'disposisi_id'       => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'tanggal_realisasi'       => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'isi_laporan'       => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'lampiran_laporan'       => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'created_by'       => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
        ]);
        $this->forge->addForeignKey('disposisi_id', 'disposisi', 'id', '', 'CASCADE');
        $this->forge->createTable('laporan_disposisi');
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->dropTable('disposisi', true);
        $this->forge->dropTable('penerima_disposisi', true);
        $this->forge->dropTable('laporan_disposisi', true);

        $this->db->enableForeignKeyChecks();
    }
}
