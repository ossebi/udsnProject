<?php

namespace App\Models;

use CodeIgniter\Model;

class GroupeetudiantModel extends Model
{
	protected $table                = 'groupesetudiants';
	protected $primaryKey           = 'id_groupesetudiant';
	protected $useAutoIncrement     = true;
	protected $returnType           = 'object';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['code', 'label'];

}
