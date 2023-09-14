<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ControleContinus extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cc_id'=>[
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
            'date'=>[
                'type'=>'DATETIME',
                'null'=>false
            ],
            'ens'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'null'=>true
            ],
            'ecue'=>[
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
            ]
    ]);

    $this->forge->addKey('cc_id',true);
    // $this->forge->addForeignKey('ens', 'enseignants', 'ens_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('ecue', 'ecues', 'ecue_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('classe', 'classes', 'classe_id', 'CASCADE', 'SET NULL');
    $this->forge->createTable('controle_continu');
    }

    public function down()
    {
        $this->forge->dropTable('controle_continu');
    }
}
