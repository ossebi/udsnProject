<?php

namespace App\Models;

use CodeIgniter\Model;

class JourModel extends Model
{
	protected $table                = 'jours';
	protected $primaryKey           = 'id_jour';
	protected $useAutoIncrement     = true;
	protected $returnType           = 'object';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['label', 'etablissement'];

	
}
