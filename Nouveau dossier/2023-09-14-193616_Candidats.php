<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Candidats extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'candidat_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'identifiant'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
                'null'=>true
            ],
            'etu_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'null'=>true
            ],
            'ecue_id'=>[
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
            ]
    ]);

    $this->forge->addKey('candidat_id',true);
    // $this->forge->addForeignKey('etu_id', 'etudiants', 'etu_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('ecue_id', 'ecues', 'ecue_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('ext_id', 'ext', 'ext_id', 'CASCADE', 'SET NULL');
    $this->forge->createTable('candidats');
    }

    public function down()
    {
        $this->forge->dropTable('note_ext');
    }
}
