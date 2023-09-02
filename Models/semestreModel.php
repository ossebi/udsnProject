<?php namespace App\Models;

use CodeIgniter\Model;

class semestreModel extends Model
{
    protected $table = 'semestres';
    protected $primaryKey = 'id_semestre';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['code', 'label', 'debut', 'fin', 'annee', 'etablissement'];


    public function getSemestres($id_ets){
        return $this->db->table('semestres')
                    ->select('semestres.code AS code, session AS annee, debut, fin, id_semestre')
                    ->join('annees', 'semestres.annee = annees.id_annee')
                    ->where(['semestres.etablissement' => $id_ets])
                    ->get()
                    ->getResult();
    }
    
   
}
