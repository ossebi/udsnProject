<?php namespace App\Models;

use CodeIgniter\Model;
use App\Entities\UniteEnseignement;

class UEModel extends Model
{
    protected $table            = 'unitesenseignement';
    protected $primaryKey       = 'id_ue';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'code', 'label', 'nb_credit',
        'etablissement', 'cycle', 'parcours',
        'specialite', 'semestre', 'object'
    ];
    protected $useTimestamps    = false;
   
    public function getUE($id){
        return $this->db->table('unitesenseignement')
                    ->select('unitesenseignement.code, unitesenseignement.label AS titre, nb_credit,
                                cycles.label AS cycle, parcourTypes.label AS parcours, specialites.label AS specialite,
                                semestres.label AS semestre')
                    ->join('cycles', 'unitesenseignement.cycle = cycles.id_cycle')
                    ->join('parcourTypes', 'unitesenseignement.parcours = parcourTypes.parcours')
                    ->join('specialites', 'unitesenseignement.specialite = specialites.id_specialite')
                    ->join('semestres', 'unitesenseignement.semestre = semestres.id_semestre')
                    // ->like('id_parcours', $id)
                    ->get()
                    ->getResult();
    }

    public function getUEBy($type, $id, $ets){
        if($type == 'parcours'){
            return $this->select('unitesenseignement.code AS code, id_ue, unitesenseignement.label AS label, nb_credit, parcourTypes.code AS parcours, specialites.code AS specialite, semestres.code AS semestre')
                        ->join('parcourTypes', 'unitesenseignement.parcours = parcourTypes.id_parcours')
                        ->join('specialites', 'unitesenseignement.specialite = specialites.id_specialite')
                        ->join('semestres', 'unitesenseignement.semestre = semestres.id_semestre')
                        ->where(['unitesenseignement.parcours' => $id,'unitesenseignement.etablissement' => $ets])
                        ->findAll();
        }
        elseif($type == 'specialite'){
            return $this->select('unitesenseignement.code AS code, id_ue, unitesenseignement.label AS label, nb_credit, parcourTypes.code AS parcours, specialites.code AS specialite, semestres.code AS semestre')
                        ->join('parcourTypes', 'unitesenseignement.parcours = parcourTypes.id_parcours')
                        ->join('specialites', 'unitesenseignement.specialite = specialites.id_specialite')
                        ->join('semestres', 'unitesenseignement.semestre = semestres.id_semestre')
                        ->where(['unitesenseignement.parcours' => $id,'unitesenseignement.etablissement' => $ets])
                        ->findAll();
        }
    }
  
}