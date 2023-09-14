<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ext extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ext_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'label'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
                'null'=>true
            ],
            'ecue_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'null'=>true
            ],
            'classe'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'null'=>true
            ],
            'ens'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'null'=>true
            ]
            
    ]);

    $this->forge->addKey('ext_id',true);
    // $this->forge->addForeignKey('ecue_id', 'ecues', 'ecue_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('ecue', 'ecues', 'ecue_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('classe', 'classes', 'classe_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('ens', 'enseignants', 'ens_id', 'CASCADE', 'SET NULL');
    $this->forge->createTable('ext');
    }

    public function down()
    {
        $this->forge->dropTable('ext');
    }
}
