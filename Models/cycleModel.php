<?php namespace App\Models;

use CodeIgniter\Model;

class cycleModel extends Model
{
    protected $table = 'cycles';
    protected $primaryKey = 'id_cycle';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['label','responsable', 'etablissement'];
    
}
