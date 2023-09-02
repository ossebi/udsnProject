<?php namespace App\Models;

use CodeIgniter\Model;

class GroupeModel extends Model
{
    protected $table            = 'groupes';
    protected $primaryKey       = 'id_groupe';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['label'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'update_at';
    protected $deletedField     = 'deleted_at';
}
