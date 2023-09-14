<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NoteExt extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'note_ext_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'note_ext'=>[
                'type'=>'FLOAT',
                'null'=>true
            ],
            'etu_id'=>[
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
            ],
            'ext_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'null'=>true
            ],
            'candidat_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'null'=>true
            ]
    ]);

    $this->forge->addKey('note_ext_id',true);
    // $this->forge->addForeignKey('etu_id', 'etudiants', 'etu_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('note_ecue_id', 'note_ecues', 'note_ecue_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('ext_id', 'ext', 'ext_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('candidat_id', 'candidats', 'candidat_id', 'CASCADE', 'SET NULL');
    $this->forge->createTable('note_ext');
    }

    public function down()
    {
        $this->forge->dropTable('note_ext');
    }
}
