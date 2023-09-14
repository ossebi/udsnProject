<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NoteEcues extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'note_ecue_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'ecue_moy'=>[
                'type'=>'FLOAT',
                'null'=>true
            ],
            'ext_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'null'=>true
            ],
            'cc_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'null'=>true
            ],
            'note_ue_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'null'=>true
            ]
    ]);

    $this->forge->addKey('note_ecue_id',true);
    // $this->forge->addForeignKey('cc_id', 'controle_continus', 'cc_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('note_ue_id', 'note_ues', 'note_ue_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('ext_id', 'ext', 'ext_id', 'CASCADE', 'SET NULL');
    $this->forge->createTable('note_ecues');
    }

    public function down()
    {
        $this->forge->dropTable('note_ecues');
    }
}
