<?php

namespace App\Models;

use CodeIgniter\Model;

class SessionModel extends Model
{
	protected $table                = 'annees';
	protected $primaryKey           = 'id_annee';
	protected $useAutoIncrement     = true;
	protected $returnType           = 'object';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['mouvement', 'session', 'debut_anne', 'fin_anne', 'etablissement'];

}
