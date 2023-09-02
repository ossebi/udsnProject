<?php

namespace App\Models;

use CodeIgniter\Model;

class TimetableModel extends Model
{
	protected $table                = 'emploi_du_temps';
	protected $primaryKey           = 'id_time_table';
	protected $useAutoIncrement     = true;
	protected $returnType           = 'object';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'jour', 'horaire', 'ecue', 'enseignant', 'groupe_etudiant', 'site', 'salle', 'batiment', 'etablissement', 
		'annee', 'semestre', 'specialite'
	];

	public function getAllInput(){
		$data['jours'] = $this->db->table('jours')->select('id_jour, label')->get()->getResult();
		$data['horaires'] = $this->db->table('horaires')->select('id_horaire')->get()->getResult();
		$data['matieres'] = $this->db->table('ecue')->select('code, label')->get()->getResult();
		$data['types'] = $this->db->table('typesecue')->select('id AS id_type_ens, type_ecue AS type_ens')->get()->getResult();
		$data['intervenants'] = $this->db->table('enseignants')->select('id_enseignant AS id_ens, nom, prenom')->get()->getResult();
		$data['semestres'] = $this->db->table('semestres')->select('id_semestre')->get()->getResult();
		$data['groupes'] = $this->db->table('groupesetudiants')->select('id_groupesetudiant, label')->get()->getResult();

		return $data;
	}
}
