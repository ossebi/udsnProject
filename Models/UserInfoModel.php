<?php namespace App\Models;

use CodeIgniter\Model;

class UserInfoModel extends Model
{
    protected $table = 'user_info';
    protected $primaryKey = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType = User::class;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['username', 'name', 'email', 'password', 'id_groupe'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'update_at';
    protected $deletedField = 'deleted_at';
  
}
