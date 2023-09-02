<?php namespace App\Models;

use CodeIgniter\Model;

class specialiteModel extends Model
{
    protected $table            = 'specialites';
    protected $primaryKey       = 'id_specialite';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['code', 'label', 'parcours', 'etablissement', 'object'];

    public function getSpecialite($id){
        return $this->db->table('specialites')
                    ->select('id_specialite, specialites.label, specialites.code, parcourTypes.code AS parcours, parcourTypes.id_parcours AS id_parcours')
                    ->join('parcourTypes', 'parcourTypes.id_parcours = specialites.parcours')
                    ->where(['specialites.etablissement' => $id])
                    ->get()
                    ->getResult();
                  
    }
}
