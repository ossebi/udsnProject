<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;
// use App\Entities\UserInfo;


class Register extends BaseController
{
    protected $configs;

    public function __construct(){
        $this->configs = config('Application');
    }
	public function index()
	{
        $model = model('GroupeModel');
        $ets = model('EtablissementModel');

        return view('Auth/register', [
            'groupes' => $model->findAll(),
            'ets'   =>  $ets->findAll()
        ]);
	}

    public function store(){
        $validation = service('validation');
        $validation->setRules([
            'username' => 'required|alpha_space',
            'email' => 'required|valid_email|is_unique[users.email]',
            'groupe' => 'required|is_not_unique[groupes.id_groupe]',
            'id_ets' => 'required',
            'password' => 'required|matches[c_password]'
        ]);

        if(!$validation->withRequest($this->request)->run()){
           return redirect()->back()->withInput()->with('errors', $validation->getErrors());      
        }
        $data = [
            'username'      => ucfirst($this->request->getVar('username')),
            'email'         =>  $this->request->getVar('email'),
            'password'      => $this->request->getVar('password'),
            'groupe'        =>  $this->request->getVar('groupe'),
            'etablissement' =>  $this->request->getVar('id_ets')
        ]; 
        $user = new User($data);
        $model = model('UserModel');

        //  d($user);
        //  exit();
 
        //  $model->withGroup($this->configs->defaultGroupUsers);
        $model->insert($user);
 
         // $userInfo = new UserInfo($this->request->getPost());
 
         // d($userInfo);
         // $model->addInfoUser($userInfo);
 
        return redirect()->route('login')
            ->with('msg', [
                'type' => 'success',
                'body' => 'Vous êtes maintenant enregistré, veuillez saisir à présent vos identifiants pour vous connecter'
            ]);

    }
}
