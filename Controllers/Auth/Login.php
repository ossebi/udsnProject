<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;


class Login extends BaseController
{
  
    public function index(){

        if(!session()->is_logged){

            return view('Auth/login');
        }

        return redirect()->back();
        
    }

    public function signin(){
        if(!$this->validate([
            'email' => 'required|valid_email',
            'password' => 'required'
        ])){
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }
        $email = trim($this->request->getVar('email'));
        $password = trim($this->request->getVar('password'));

        $model = model('UserModel');

        if(!$user = $model->getUserBy('email', $email)){
            return redirect()->back()
                ->withInput()
                ->with('msg', [
                    'type' => 'danger',
                    'body' => 'cette adresse ne correspond à aucun utilisateur'
                ]);
        }

        if(!password_verify($password, $user->password)){
            return redirect()->back()
                ->withInput()
                ->with('msg', [
                    'type' => 'danger',
                    'body' => 'Ce mot de passe n\'est pas valide veuillez rééssayer'
                ]);
        }
        $etsModel = model('etablissementModel');
        $ets = $etsModel->where(['id_etab' => $user->etablissement])->first();
        session()->set([
            'id_user' => $user->id_user,
            'groupe' => $user->groupe,
            'username' => $user->username,
            'id_ets' => $user->etablissement,
            'logo' => $ets->logo,
            'ets'  => $ets->label,
            'is_logged' => true
        ]);

        return redirect()->route($model->setRouteByPost($user->groupe));
    }

    public function signout(){

        session()->destroy();
        return redirect()->route('login');
    }
}