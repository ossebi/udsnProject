<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Repartitions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'repartition_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'jour'=>[
                'type'=>'VARCHAR',
                'constraint'=>15,
                'null'=>true
            ],
            'heure_debut'=>[
                'type'=>'VARCHAR',
                'constraint'=>15,
                'null'=>true
            ],
            'heure_debut'=>[
                'type'=>'VARCHAR',
                'constraint'=>15,
                'null'=>true
            ],
            'site'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
                'null'=>true
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
            ],
            'session'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'null'=>true
            ],
            'semestre'=>[
                'type'=>'INT',
                'constraint'=>2,
                'unsigned'=>true,
                'null'=>true
            ]
            
    ]);

    $this->forge->addKey('repartition_id',true);
    // $this->forge->addForeignKey('ens', 'enseignants', 'ens_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('ecue', 'ecues', 'ecue_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('semestre', 'semestres', 'semestre_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('classe', 'classes', 'classe_id', 'CASCADE', 'SET NULL');
    // $this->forge->addForeignKey('session', 'annee_academiques', 'annee_id', 'CASCADE', 'SET NULL');
    $this->forge->createTable('repartitions');
    }

    public function down()
    {
        $this->forge->dropTable('repartitions');
    }
}
