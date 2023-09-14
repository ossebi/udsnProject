<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NoteControleContinus extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'note_cc_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'note_cc'=>[
                'type'=>'FLOAT',
                'null'=>true
            ],
            'etu_id'=>[
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
            'note_ecue_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'null'=>true
            ]
    ]);

    $this->forge->addKey('note_cc_id',true);
    // $this->forge->addForeignKey('etu_id', 'etudiants', 'etu_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('cc_id', 'controle_continus', 'cc_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('note_ecue_id', 'note_ecues', 'note_ecue_id', 'CASCADE', 'SET NULL');
    $this->forge->createTable('note_controle_continus');
    
    }

    public function down()
    {
        $this->forge->dropTable('note_controle_continus');
    }
}
