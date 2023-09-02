<?php namespace App\Models;

use CodeIgniter\Model;

class parcoursModel extends Model
{
    protected $table            = 'parcourTypes';
    protected $primaryKey       = 'id_parcours';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['code','responsable', 'label', 'cycle', 'object', 'etablissement'];
}
