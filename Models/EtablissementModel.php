<?php

namespace App\Models;

use CodeIgniter\Model;

class EtablissementModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'etabs';
	protected $primaryKey           = 'id_etab';
	protected $useAutoIncrement     = true;
	protected $returnType           = 'object';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['code', 'label', 'logo'];

}
