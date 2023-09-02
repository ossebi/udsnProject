<?php

namespace App\Models;

use CodeIgniter\Model;

class HoraireModel extends Model
{
	protected $table                = 'horaires';
	protected $primaryKey           = 'id_horaire';
	protected $useAutoIncrement     = true;
	protected $returnType           = 'object';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['label', 'heure_debut', 'heure_fin', 'etablissement'];

}
