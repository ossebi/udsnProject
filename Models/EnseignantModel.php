<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Enseignant;

class EnseignantModel extends Model
{
	protected $table                = 'enseignants';
	protected $primaryKey           = 'id_enseignant';
	protected $useAutoIncrement 	= true;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'matricule', 'nom', 'prenom', 'naissance', 'lieu', 'genre', 'domaine', 'phone', 'grade', 'statut',
		'adresse', 'ville', 'nationalite', 'profil', 'etablissement'
	];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

}
