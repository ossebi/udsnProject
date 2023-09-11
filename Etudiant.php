<?php

namespace App\Controllers\Etudiant;

use App\Controllers\BaseController;

class Etudiant extends BaseController
{
    public function index()
    {
        if(!session()->is_logged){
            return view('auth/login');
        }
        $modelEtu = model('Etudiants');
        $etudiant = $modelEtu -> getEtudiantbyIdfirst(session('profil_id'));
        $classe = $etudiant->classe;
        $modelEns = model('EnseignantClasses');
        return view('etudiant/index', ["enseignants" => $modelEns->getEnsbyClasse($classe),  "etudiants" =>$modelEtu->getEtudiantByClasse($classe) ]);
    }

    public function profil()
    {
        if(!session()->is_logged){
            return view('auth/login');
        }
        $model=model('Etudiants');
        return view('etudiant/profil_etudiant', ['etudiants' => $model->getEtudiantbyId(session('profil_id'))]);
    }

    public function enregistrement(){
        if(!session()->is_logged){
            return view('auth/login');
        }
        if($this->request->getMethod() == 'post'){
           $this->request->getPost('');
            if(!$this->validate([
                'nom' => ['rules' => 'required',
                            'errors' => ['required' => 'nom obligatoire' ,
                            ]],
                'prenom' => [
                                'rules'=>'required',
                                'errors'=>['required'=>'le credit est obligatoire',
                                ]],
                'telephone' => ['rules'=>'required',
                                'errors'=>['required'=>'le domaine',
                                ]],
                'genre' => ['rules'=>'required',
                                'errors'=>[
                                'required'=> 'le genre est obligatoire']],
                'statut' => [
                              'rules'=>'required',
                              'errors'=>[
                                          'required'=>'le statut est obligatoire',
                                          ]
                              ],
                            ])){
                return redirect()
              
                ->withInput()
                ->with('error', $this->validator->getErrors());
            }
       
            $model = model('Etudiants');
            
            $data = [
                'etu_id'=> session('profil_id'),
                'etu_nom' => $this->request->getPost('nom'),
                'etu_prenom' => $this->request->getPost('prenom'),
                'etu_naissance_date' => $this->request->getPost('date_naissance'),
                'etu_naissance_lieu' => $this->request->getPost('lieu_naissance'),
                'etu_genre' => $this->request->getPost('genre'),
                'etu_tel' => $this->request->getPost('telephone'),
                'etu_statut' => $this->request->getPost('statut'),
                'etu_matricule'=>$this->request->getPost('matricule'),
                'etu_matrimonial'=>$this->request->getPost('situation_matrimoniale'),
                'etu_domaine'=>$this->request->getPost('domaine'),
                'etu_ville' => $this->request->getPost('ville'),
                'etu_adresse' => $this->request->getPost('adresse'),
                'etu_profil' => $this->request->getPost('profil'),
                'etu_nationalite' => $this->request->getPost('nationalite'),
            ];
            
        
            $model->save($data);
            return redirect()->route('profil_etudiant');

        }
    }

    public function calendrier_cc()
    {
        if(!session()->is_logged){
            return view('auth/login');
        }
        $modelEtu = model('Etudiants');
        $etudiant = $modelEtu -> getEtudiantbyIdfirst(session('profil_id'));
        $classe = $etudiant->classe;
        $model = model('Ccs');
        return view('etudiant/calendrier_cc', ['ccs' => $model->getAllbyClasse($classe)]);
    }
}
