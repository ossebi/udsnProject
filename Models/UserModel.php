<?php namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;
use App\Entities\UserInfo;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType       = User::class;
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['username', 'email', 'password', 'groupe', 'etablissement'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'update_at';
    protected $deletedField     = 'deleted_at';

    // protected $beforeInsert = ['addGroup'];
    //protected $afterInsert  = ['storeUserInfo'];

    // protected $assignGroup;
    // protected $infoUser;

    // protected function addGroup($data){
    //     $data['data']['id_groupe'] = $this->assignGroup;
    //     return $data;
    // }

    // protected function storeUserInfo($id){
    //     $this->infoUser->id_user = $data['id'];
    //     $model = model('UserInfoModel');
    //     $model->insert($this->infoUser);
    // }

    // public function withGroup(string $group){
    //     $row = $this->db->table('groupe')
    //         ->where('name_groupe', $group)
    //         ->get()->getFirstRow();

    //         if($row !== null){
    //             $this->assignGroup = $row->id_groupe;
    //         }
    // }

    // public function addInfoUser(UserInfo $ui){
    //     $this->infoUser = $ui;
    // }

    public function getUserBy(string $column, string $value){
        return $this->where($column, $value)->first();
    }
    public function setRouteByPost(string $id){
        return $this->db->table('groupes')
            ->select('label')
            ->where('id_groupe', $id)
            ->get()
            ->getFirstRow()
            ->label;
    }
    public function insertGroupe(){
        $row = $this->db->table('groupes')
		                ->where('label', 'admin')
			            ->get()->getFirstRow();
		if($row == null){
            $this->db->table('groupes')->insert([
                'label' =>    'admin'
            ]);
		}
	}
}
