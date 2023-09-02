<?php

namespace App\Models;

use CodeIgniter\Model;

class TypeecueModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'type_ecue';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $returnType           = 'object';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['type_ecue'];

}
