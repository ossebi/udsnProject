<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Resultats extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'resultat_id'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'moy_gen'=>[
                'type'=>'FLOAT',
                'null'=>true
            ],
            'total_gen'=>[
                'type'=>'FLOAT',
                'null'=>true
            ],
            'decision'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
                'null'=>true
            ]
    ]);

    $this->forge->addKey('resultat_id',true);
    $this->forge->createTable('resultats');
    }

    public function down()
    {
        $this->forge->dropTable('resultats');
    }
}
