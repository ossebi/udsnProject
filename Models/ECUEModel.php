<?php namespace App\Models;

use CodeIgniter\Model;

class ECUEModel extends Model
{
    protected $table = 'ecue';
    protected $primaryKey = 'id_ecue';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['code','label', 'credit', 
        'coef', 'vol_heure', 'unitesenseignement', 'object', 'etablissement'];

        public function getECUEByParcours($id, $id_ets){
            return $this->select('ecue.code, ecue.label AS titre, credit, vol_heure, unitesenseignement.label AS unite_ens')
                        ->join('unitesenseignement', 'unitesenseignement.code = ecue.unitesenseignement')
                        ->where(['ecue.unitesenseignement' => $id])
                        ->where(['ecue.etablissement' => $id_ets])
                        ->get()
                        ->getResult();
        }
        public function getECUEBySpecialite($id, $id_ets){
            return $this->db->table('unitesenseignement')
                        ->select('ecue.code AS code, ecue.label AS titre, credit, vol_heure,
                        unitesenseignement.label AS unite_ens')
                        ->join('ecue', 'unitesenseignement.code = ecue.unitesenseignement')
                        ->where(['unitesenseignement.id_specialite' => $id])
                        ->where(['ecue.etablissement' => $id_ets])
                        ->get()
                        ->getResult();
        }
}
