<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Admin;

class Config extends BaseController
{
	public function index()
	{
		return view('Config/welcome');
	}
    public function etablissement(){
        return view('Config/etablissement');
    }
    public function storeETS(){
        $validation = service('validation');
        $validation->setRules([
            'code_ets' => 'required|is_unique[etabs.code]',
            'nom_ets' => 'required'
            ]);
        if(!$validation->withRequest($this->request)->run()){
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());      
         }
        $file = $this->request->getFile('logo');
        $imageName = '';
        if($file->isValid() && !$file->hasMoved() && !$file->isExecutable()){
            $imageName = $file->getRandomName();
            $file->move('assets/img/logo/ets', $imageName);
        }
        $data = [
            'code'   =>  strtoupper($this->request->getVar('code_ets')),
            'label' =>  ucwords($this->request->getVar('nom_ets')),
            'logo'    =>  $imageName
        ];

        $model = model('EtablissementModel');
        $model->save($data);
        $ets = $model->where(['code' => $this->request->getVar('code_ets')])
                    ->get()
                    ->getFirstRow();
        session()->set([
            'id_ets' => $ets->id_etab
        ]);
        return redirect()->route('create_admin')
            ->with('msg', [
                'type' => 'success',
                'body' => 'votre établissement a été bien crée, veuillez continuer svp!'
            ]);
    }
    public function createAdmin(){
        if(!session()->id_ets){return redirect()->route('config_ets');}
        return view('Config/create_admin');
    }
    public function storeAdmin(){
        if(!session()->id_ets){return redirect()->route('config_ets');}
        $validation = service('validation');
        $validation->setRules([
            'nom' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'mdp' => 'required|matches[c_mdp]'
        ]);
        if(!$validation->withRequest($this->request)->run()){
           return redirect()->back()->withInput()->with('errors', $validation->getErrors());      
        }
        $data = [
            'username'      => ucfirst($this->request->getVar('nom')),
            'email'         =>  $this->request->getVar('email'),
            'password'      => $this->request->getVar('mdp'),
            'groupe'        =>  '',
            'etablissement' =>  session()->id_ets
        ];
        $model = model('UserModel');
        $model->insertGroupe();    
        $admin = new Admin($data);         
        $admin->setIdGroup();  
        $model->save($admin); 
        return redirect()->route('login')
            ->with('msg', [
                'type' => 'success',
                'body' => 'votre établissement a été bien crée, veuillez vous connecter à présent'
            ]);
    }
}
