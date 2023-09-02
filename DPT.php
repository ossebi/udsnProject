<?php namespace App\Models;

use CodeIgniter\Model;

class DPT extends Model
{
    

    public function getInputSelectUE($count_ue = false, $ue = false){

        $data['parcours'] = $this->db->table('parcourTypes')->select('id_parcours, label AS parcours, code')
            ->get()
            ->getResult();

        $data['specialite'] = $this->db->table('specialites')->select('id_specialite, label AS specialite, code')
        ->get()
        ->getResult();

        $data['semestre'] = $this->db->table('semestres')->select('id_semestre, label AS semestre, code')
        ->get()
        ->getResult();

        if($count_ue == true){
            
            $data['nbre_ue'] = $this->db->table('unitesenseignement')
            ->get()
            ->getNumRows();
        }

        if($ue == true){
            
            $data['ue'] = $this->db->table('unitesenseignement')
            ->select('id_ue, label AS unite_ens')
            ->get()
            ->getResult();
        }

            return $data;
    }
    // public function withGroup(string $group){
    //     $row = $this->db->table('groupe')
    //         ->where('name_groupe', $group)
    //         ->get()->getFirstRow();

    //         if($row !== null){
    //             $this->assignGroup = $row->id_groupe;
    //         }
    // }

 
    // public function getUserBy(string $column, string $value){

    //     return $this->where($column, $value)->first();
    // }

    // public function setRouteByPost(string $id){
    //     return $this->db->table('groupe')
    //         ->select('name_groupe')
    //         ->where('id_groupe', $id)
    //         ->get()
    //         ->getFirstRow()
    //         ->name_groupe;
    // }
}
