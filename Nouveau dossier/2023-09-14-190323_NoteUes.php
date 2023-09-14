<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NoteUes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'note_ue_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'ue_moy'=>[
                'type'=>'FLOAT',
                'null'=>true
            ],
            'ue_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'null'=>true
            ],
            'resultat_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'null'=>true
            ]
    ]);

    $this->forge->addKey('note_ue_id',true);
    // $this->forge->addForeignKey('ue_id', 'ues', 'ue_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('resultat_id', 'resultats', 'resultat_id', 'CASCADE', 'SET NULL');
    $this->forge->createTable('note_ues');
    }

    public function down()
    {
        $this->forge->dropTable('note_ues');
    }
}
