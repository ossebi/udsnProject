<?php

namespace App\Controllers\DPT;

use App\Controllers\BaseController;
use App\Entities\User;
use App\Entities\UniteEnseignement;
use App\Entities\Enseignant;
use App\Entities\UserInfo;


class DPT extends BaseController
{

    public function index(){
        if(!session()->is_logged){return redirect()->route('login');}
        return view('DPT/home');
    }

    public function detailUE(string $code = null){
        if(!session()->is_logged){return redirect()->route('login');}
        $model = model('UEModel');
        if(!$ue = $model->find($code)){
            //    throw errorException::forPageNotFound();
                echo "Page Not Found";
                exit();
            }
        $data['ue'] = $ue;
        return view('DPT/detail-ue', $data);
    }

    public function editUE(string $code = null){
        if(!session()->is_logged){return redirect()->route('login'); }
        $model = model('UEModel');
        if(!$ue = $model->find($code)){
        //    throw errorException::forPageNotFound();
            echo "Page Not Found";
            exit();
        }
        $data = model('DPT')->getInputSelectUE(false);
        $data['ue'] = $ue;
        return view('DPT/edit_ue', $data);
    }

    public function editAnnee(){
        if(!session()->is_logged){return redirect()->route('login'); }
        $model = model('SessionModel'); 
        $data['annee'] = $model->where(['etablissement' => session()->id_ets])->find($this->request->getVar('id'));
        return $this->response->setJSON($data);
    }

    public function editSemestre(){
        if(!session()->is_logged){return redirect()->route('login'); }
        $model = model('semestreModel'); 
        $data['semestres'] = $model->where(['etablissement' => session()->id_ets])->find($this->request->getVar('id'));
        return $this->response->setJSON($data);
    }

    public function editCycle(){
        if(!session()->is_logged){return redirect()->route('login'); }
        $model = model('cycleModel'); 
        $data['cycles'] = $model->where(['etablissement' => session()->id_ets])->find($this->request->getVar('id'));
        return $this->response->setJSON($data); 
    }

    public function gestionAnnee(){
        if(!session()->is_logged){return redirect()->route('login'); }
        $model = model('SessionModel');
        $select = $model->where(['etablissement' => session()->id_ets]);
        $data['annee_ac'] = $select->findAll();
        $data['totalAnnee'] = $select->countAllResults();
        return view('DPT/gestion_annee', $data); 
    }

    public function gestionUE(){
        if(!session()->is_logged){ return redirect()->route('login');}
        $model = model('DPT');
        $data = $model->getInputSelectUE(true);
        return view('DPT/gestion_ue', $data);
    }

    public function gestionMatiere(){
        $model = model('DPT');
        $data = $model->getInputSelectUE(false, true);
        return view('DPT/gestion_matiere', $data);
    }

    public function gestionCycle(){
        if(!session()->is_logged){return redirect()->route('login'); }
        $model = model('cycleModel');
        $data['cycles'] = $model->where(['etablissement' => session()->id_ets])
                                ->findAll();
        return view('DPT/gestion_cycle', $data);
    }

    public function gestionParcours(){
        if(!session()->is_logged){return redirect()->route('login'); }
        $model = model('parcoursModel');
        $select = $model->where(['etablissement' => session()->id_ets]);
        $data['parcours'] = $select->findAll();
        $data['totalRecords'] = $select->countAllResults();
        $data['cycles'] = model('cycleModel')->findAll(); 
        return view('DPT/gestion_parcours', $data);
    }

    // public function getParcours(){
    //     if(!session()->is_logged){return redirect()->route('login'); }
    //     $request = service('request');
    //     $postData = $request->getPost();
    //     $dtpostData = $postData['data'];

    //     $draw = $dtpostData['draw'];
    //     $start = $dtpostData['start'];
    //     $rowperpage = $postData['length'];
    //     $columnIndex = $dtpostData['order'][0]['column'];
    //     $columnName = $dtpostData['columns'][$columnIndex]['data'];
    //     $columnSortOrder = $dtpostData['order'][0]['dir'];
    //     $searchValue = $dtpostData['search']['value'];

    //     $model = model('parcoursModel');
    //     $totalRecords = $model->select('id_parcours')->countAllResults();

    //     $totalRecordwithFilter = $model->select('id_parcours')
    //             ->orLike('id_parcours', $searchValue)
    //             ->orLike('intitule', $searchValue)
    //             ->orLike('responsable', $searchValue)
    //             ->countAllResults();

    //     $response = array();
    //     $records = $model->select('*')
    //             ->orLike('id_parcours', $searchValue)
    //             ->orLike('intitule', $searchValue)
    //             ->orLike('responsable', $searchValue)
    //             ->orderBy($columnName, $columnSortOrder)
    //             ->findAll($rowperpage, $start);

    //     $data = array();
    //     foreach ($records as $record) {
    //         $data[] = array(
    //             'id' => $record['id_parcours'],
    //             'intitule' => $record['intitule'],
    //             'responsable' => $record['responsable']
    //         );
    //     }

    //     $response = array(
    //         'draw' => intval($draw),
    //         'iTotalRecords' => $totalRecords,
    //         'iTotalDisplayRecords' => $totalRecordwithFilter,
    //         'aaData' => $data,
    //         'nbrParcours' => $totalRecords,
    //         'token' => csrf_hash()
    //     );
    //     return $this->response->setJSON($response);
    // }

    public function gestionSpecialite(){
        if(!session()->is_logged){return redirect()->route('login'); }
        $model = model('specialiteModel');
        $data['parcours'] = model('parcoursModel')
                            ->where(['etablissement' => session()->id_ets])
                            ->findAll();
                            
        $data['specialites'] = $model->getSpecialite(session()->id_ets);
        // $data['totalRecords'] = $select->countAllResults();
        return view('DPT/gestion_specialite', $data);
    }

    public function gestionSemestre(){
        if(!session()->is_logged){return redirect()->route('login'); }
        $model = model('semestreModel');
        $data['annee_ac'] = model('SessionModel')
                            ->where(['etablissement' => session()->id_ets])
                            ->findAll();
        $data['semestres'] = $model->getSemestres(['etablissement' => session()->id_ets]);
        return view('DPT/gestion_semestre', $data);
    }

    public function gestionTimeTable(){
        if(!session()->is_logged){return redirect()->route('login'); }
        $model = model('TimeTableModel');
        $data = $model->getAllInput();
        return view('DPT/time_table', $data);
    }

    public function gestionEnseignant(){
        $model = model('EnseignantModel');
        $data['enseignants'] = $model->findAll();
        return view('DPT/gestion_enseignant', $data);
    }
    
    public function addEnseignant(){
        return view('DPT/add_enseignant');
    }

    public function deleteCycle(){
        if(!session()->is_logged){return redirect()->route('login');}    
         $model = model('cycleModel');
         if(!$model->delete($this->request->getPost('id'))){
            $data = ['error' => 'Erreur lors de la suppression'];
            return $this->response->setJSON($data);
         }
        $data = ['success' => 'Suppression réussie!'];
         return $this->response->setJSON($data);
    }

    public function deleteAnneeAc(){
        if(!session()->is_logged){return redirect()->route('login');}    
         $model = model('SessionModel');
         if(!$model->delete($this->request->getPost('id'))){
            $data = ['error' => 'Erreur lors de la suppression'];
            return $this->response->setJSON($data);
         }
        $data = ['success' => 'Suppression réussie!'];
         return $this->response->setJSON($data);
    }

    public function deleteSemestre(){
        if(!session()->is_logged){return redirect()->route('login');}    
         $model = model('semestreModel');
         if(!$model->delete($this->request->getPost('id'))){
            $data = ['error' => 'Erreur lors de la suppression'];
            return $this->response->setJSON($data);
         }
        $data = ['success' => 'Suppression réussie!'];
         return $this->response->setJSON($data);
    }

    public function deleteEnseignant(){
        if(!session()->is_logged){return redirect()->route('login');}    
        $model = model('EnseignantModel');
        if(!$model->delete($this->request->getPost('id'))){
           $data = ['error' => 'Erreur lors de la suppression'];
           return $this->response->setJSON($data);
        }
       $data = ['success' => 'Suppression réussie!'];
        return $this->response->setJSON($data);
    }

    public function deleteUE(){
        if(!session()->is_logged){return redirect()->route('login');}    
        $model = model('UEModel');
        if(!$model->delete($this->request->getPost('id'))){
           $data = ['error' => 'Erreur lors de la suppression'];
           return $this->response->setJSON($data);
        }
       $data = ['success' => 'Suppression réussie!'];
        return $this->response->setJSON($data);
    }

    public function deleteParcours(){
        if(!session()->is_logged){return redirect()->route('login');}    
        $model = model('parcoursModel');
        if(!$model->delete($this->request->getPost('id'))){
           $data = ['error' => 'Erreur lors de la suppression'];
           return $this->response->setJSON($data);
        }
       $data = ['success' => 'Suppression réussie!'];
        return $this->response->setJSON($data);
    }

    public function storeUE(){
        if(!session()->is_logged){return redirect()->route('login');}
        $validation = service('validation');
        $validation->setRules([
            'code' => 'required|is_unique[unitesenseignement.code]',
            'intitule' => 'required',
            'credit' => 'required',
            'parcours' => 'required',
            'semestre' => 'required'
        ]);
        if(!$validation->withRequest($this->request)->run()){
            $data = ['error1' => $validation->getErrors()];
           return $this->response->setJSON($data);      
        }
        $data = [
            'code' => trim($this->request->getVar('code')),
            'label' => trim($this->request->getVar('intitule')),
            'nb_credit' => trim($this->request->getVar('credit')),
            'parcours' => trim($this->request->getVar('parcours')),
            'specialite' => trim($this->request->getVar('specialite')),
            'semestre' => trim($this->request->getVar('semestre')),
            'object' => trim($this->request->getVar('object')),
            'etablissement' => session()->id_ets,
            'cycle' => trim('1'),
        ];
        $ue = new UniteEnseignement($data);
         $model = model('UEModel');
         if(!$model->save($ue)){
            $data = ['error2' => 'Désolé l\'enregistrement n\'a pas abouti'];
           return $this->response->setJSON($data);
         }
        $data = ['success' => 'Enregistrement réussi'];
         return $this->response->setJSON($data);
    }

    public function storeECUE(){
        if(!session()->is_logged){return redirect()->route('login');}
        $validation = service('validation');
        $validation->setRules([
            'code' => 'required',
            'intitule' => 'required',
            'credit' => 'required',
            'ue' => 'required',
            'coef' => 'required',
            'heure' => 'required'
        ]);
        if(!$validation->withRequest($this->request)->run()){
            $data = ['error1' => $validation->getErrors()];
           return $this->response->setJSON($data);      
        }
        $data = [
            'code'              => trim($this->request->getVar('code')),
            'label'             => trim($this->request->getVar('intitule')),
            'credit'            => trim($this->request->getVar('credit')),
            'unitesenseignement'=> trim($this->request->getVar('ue')),
            'coef'              => trim($this->request->getVar('coef')),
            'vol_heure'         => trim($this->request->getVar('heure')),
            'object'            =>trim($this->request->getVar('object_ecue')),
            'etablissement'     => session()->id_ets
        ];
         $model = model('ECUEModel');
         if(!$model->save($data)){
            $data = ['error2' => 'Désolé l\'enregistrement n\'a pas abouti'];
           return $this->response->setJSON($data);
         }
        $data = ['success' => 'Enregistrement réussi'];
         return $this->response->setJSON($data);
    }

    public function storeCycle(){
        if(!session()->is_logged){return redirect()->route('login'); }
        $validation = service('validation');
        $validation->setRules([
            'cycle' => 'required|is_unique[cycles.label]'
        ]);
        
        if(!$validation->withRequest($this->request)->run()){
            $data = ['error1' => $validation->getErrors()];
            return $this->response->setJSON($data); 
        }
  
        $data =  [
            'label' => trim($this->request->getVar('cycle')),
            'responsable' => trim($this->request->getVar('responsable')),
            'etablissement' => session()->id_ets
        ];
        $model = model('cycleModel');
        if(!$model->save($data)){
            return $this->response->setJSON(['msg' => 'Une erreur est survenue pendant l\'enregistrement, veuillez rééssayez']);
        }
        return $this->response->setJSON(['success' => 'Données enregistrées avec succès']);
    }

    public function storeAnnee(){
        if(!session()->is_logged){return redirect()->route('login');}
        $validation = service('validation');
        $validation->setRules([
            'debut' => 'required',
            'fin' => 'required'
        ]);
        if(!$validation->withRequest($this->request)->run()){
            $data = ['error1' => $validation->getErrors()];
           return $this->response->setJSON($data);      
        }
        $data = [
            'debut_anne' => date('Y-m-d', strtotime($this->request->getVar('debut'))),
            'fin_anne' => date('Y-m-d', strtotime($this->request->getVar('fin'))),
            'session' => date('Y', strtotime($this->request->getVar('debut'))).'-'.date('Y', strtotime($this->request->getVar('fin'))),
            'etablissement' => session()->id_ets,
        ];
         $model = model('SessionModel');
         if(!$model->save($data)){
            $data = ['error2' => 'Désolé l\'enregistrement n\'a pas abouti'];
           return $this->response->setJSON($data);
         }
        $data = ['success' => 'Enregistrement réussi'];
         return $this->response->setJSON($data);
    }

    public function storeParcours(){
        if(!session()->is_logged){return redirect()->route('login');}
        $validation = service('validation');
        $validation->setRules([
            'id_parcours' => 'required|is_unique[parcourTypes.id_parcours]',
            'intitule' => 'required'
        ]);
        if(!$validation->withRequest($this->request)->run()){
            $data = ['error1' => $validation->getErrors()];
           return $this->response->setJSON($data);      
        }
        $data = [
            'code' => trim($this->request->getVar('id_parcours')),
            'label' => trim($this->request->getVar('intitule')),
            'responsable' => trim($this->request->getVar('responsable')),
            'object' => trim($this->request->getVar('object')),
            'cycle' => trim($this->request->getVar('cycle')),
            'etablissement'    =>  session()->id_ets
        ];
         $model = model('parcoursModel');
         if(!$model->save($data)){
            $data = ['error2' => 'Désolé l\'enregistrement n\'a pas abouti'];
           return $this->response->setJSON($data);
         }
        $data = ['success' => 'Enregistrement réussi'];
         return $this->response->setJSON($data);
    }

    public function storeSpecialite(){
        $validation = service('validation');
        $validation->setRules([
            'id_specialite' => 'required|is_unique[specialites.id_specialite]',
            'intitule' => 'required',
            'id_parcours' => 'required'
        ]);
        if(!$validation->withRequest($this->request)->run()){
            $data = ['error1' => $validation->getErrors()];
           return $this->response->setJSON($data);      
        }
        $data = [
            'code' => trim($this->request->getVar('id_specialite')),
            'label' => trim($this->request->getVar('intitule')),
            'parcours' => trim($this->request->getVar('id_parcours')),
            'etablissement'    =>  session()->id_ets,
            'object' => trim($this->request->getVar('object_spc'))
        ];
         $model = model('specialiteModel');
         if(!$model->save($data)){
            $data = ['error2' => 'Désolé l\'enregistrement n\'a pas abouti'];
           return $this->response->setJSON($data);
         }
        $data = ['success' => 'Enregistrement réussi'];
         return $this->response->setJSON($data);
    }

    public function storeSemestre(){
        $validation = service('validation');
        $validation->setRules([
            'id_semestre' => 'required|is_unique[semestres.code]|max_length[2]',
            'intitule' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            'annee_ac' => 'required'
        ]);
        if(!$validation->withRequest($this->request)->run()){
            $data = ['error1' => $validation->getErrors()];
           return $this->response->setJSON($data);      
        }
        $data = [
            'code' => trim($this->request->getVar('id_semestre')),
            'label' => trim($this->request->getVar('intitule')),
            'debut' => date('Y-m-d', strtotime($this->request->getVar('debut'))),
            'fin' => date('Y-m-d', strtotime($this->request->getVar('fin'))),
            'annee' => trim($this->request->getVar('annee_ac')),
            'etablissement' => session()->id_ets
        ];
         $model = model('semestreModel');
         if(!$model->save($data)){
            $data = ['error2' => 'Désolé l\'enregistrement n\'a pas abouti'];
           return $this->response->setJSON($data);
         }
        $data = ['success' => 'Enregistrement réussi'];
         return $this->response->setJSON($data);
    }

    public function storeEnseignant(){
        $validation = service('validation');
        $validation->setRules([
            'nom' => 'trim|required|alpha_space',
            'date' => 'required',
            'lieu' => 'required',
            'phone' => 'required|is_unique[enseignants.phone]',
            'genre' => 'required',
            'nationalite' => 'required',
            'domaine' => 'required',
            'grade' => 'required',
            'status' => 'required'
        ]);
        if(!$validation->withRequest($this->request)->run()){
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());      
         }
        $file = $this->request->getFile('profil');
        $imageName = '';
        if($file->isValid() && !$file->hasMoved() && !$file->isExecutable()){
            $imageName = $file->getRandomName();
            $file->move('assets/img/profiles/enseignants', $imageName);
        }
        $data = [
            'matricule'     =>  '',
            'nom'           =>  $this->request->getVar('nom'),
            'prenom'        =>  $this->request->getVar('prenom'),
            'naissance'     =>  date('Y-m-d', strtotime($this->request->getVar('date'))),
            'lieu'          =>  $this->request->getVar('lieu'),
            'genre'         =>  $this->request->getVar('genre'),
            'domaine'       =>  $this->request->getVar('domaine'),
            'phone'         =>  $this->request->getVar('phone'),
            'grade'         =>  $this->request->getVar('grade'),
            'statut'        =>  $this->request->getVar('status'),
            'nationalite'   =>  $this->request->getVar('nationalite'),
            'profil'        =>  $imageName,
            'etablissement' =>  session()->id_ets
        ];
        $enseignant = new Enseignant($data);
        $model = model('EnseignantModel');
        $model->save($enseignant);
        return redirect()->back()
            ->with('msg', [
                'type' => 'success',
                'body' => 'Enseignant enregistré avec succès'
            ]);
    }

    public function storeTimeTable(){
        $validation = service('validation');
        $validation->setRules([
            'jour' => 'required',
            'horaire' => 'required',
            'ecue' => 'required',
            'ens' => 'required',
            'semestre' => 'required',
            'salle' => 'required',
            'site' => 'required',
            'bat' => 'required'
        ]);
        if(!$validation->withRequest($this->request)->run()){
            $data = ['error1' => $validation->getErrors()];
           return $this->response->setJSON($data);      
        }
        $data = [
            'id_jour' => trim($this->request->getVar('jour')),
            'id_horaire' => trim($this->request->getVar('horaire')),
            'id_ecue' => trim($this->request->getVar('ecue')),
            'id_ens'    =>  trim($this->request->getVar('ens')),
            'id_groupe_etudiant' => trim($this->request->getVar('groupe')),
            'site' => trim($this->request->getVar('site')),
            'salle' => trim($this->request->getVar('salle')),
            'batiment' => trim($this->request->getVar('bat')),
            'id_ets'    =>  session()->id_ets,
            'id_annee_acad' => trim($this->request->getVar('annee_ac')),
            'id_semestre'    =>  trim($this->request->getVar('semestre')),
            'id_parcours' => trim($this->request->getVar('id_parcours')),
            'id_specialite' => trim($this->request->getVar('id_specialite'))
        ];
         $model = model('specialiteModel');
         if(!$model->save($data)){
            $data = ['error2' => 'Désolé l\'enregistrement n\'a pas abouti'];
           return $this->response->setJSON($data);
         }
        $data = ['success' => 'Enregistrement réussi'];
         return $this->response->setJSON($data);
    }

    public function search_ue(){
        if(!session()->is_logged){return redirect()->route('login');}
        $model = model('UEModel');
        $data = array();
        if($this->request->getVar('id_parcours')){
            $data = $model->getUEBy('parcours', $this->request->getVar('id_parcours'), session()->id_ets);
        }
        elseif($this->request->getVar('id_specialite')){
            $data = $model->getUEBy('specialite', $this->request->getVar('id_specialite'), session()->id_ets);
        }
        return redirect()->back()->withInput()->with('ue', $data);         
    }

    // public function searchUE(){
    //     if(!session()->is_logged){return redirect()->route('login');}
    //     $validation = service('validation');
    //     $validation->setRules([
    //         'id_parcours' => 'required'
    //     ]);
    //     if(!$validation->withRequest($this->request)->run()){
    //         $data = ['error1' => $validation->getErrors()];
    //         return $this->response->setJSON($data); 
    //     }
    //     // $data = [
    //     //     'id_parcours' => trim($this->request->getVar('id_parcours'))
    //     // ];
    //      $model = model('UEModel');
    //      $data['ue'] = $model->getUE(trim($this->request->getVar('id_parcours')));
    //      return $this->response->setJSON($data); 
    // }

    public function searchECUE(){
        if(!session()->is_logged){return redirect()->route('login');}
        $model = model('ECUEModel');
        $data = array();
        if($this->request->getVar('id_parcours')){
            $data = $model->getECUEByParcours($this->request->getVar('id_parcours'), session()->id_ets);
        }
        elseif ($this->request->getVar('id_specialite')) {
            $data = $model->getECUEBySpecialite($this->request->getVar('id_specialite'), session()->id_ets);
        }
        return redirect()->back()->withInput()->with('ecue', $data);
    }

    // public function searchEnsByID(){
    //     if(!session()->is_logged){return redirect()->route('login');}
    //     // $validation = service('validation');
    //     // $validation->setRules([
    //     //     'id_parcours' => 'required'
    //     // ]);
    //     // if(!$validation->withRequest($this->request)->run()){
    //     //     $data = ['error1' => $validation->getErrors()];
    //     //     return $this->response->setJSON($data); 
    //     // }
        
    //     if(!trim($this->request->getVar('id'))){
    //         $model = model('EnseignantModel');
    //         $id = $model->select('id, nom')
    //                     ->orderBy('id')
    //                     ->findAll(5);
    //     }else {
    //         $id = trim($this->request->getVar('id'));
    //         $model = model('EnseignantModel');
    //         $list_id = $model->select('id, nom')
    //                          ->like('id', $id)
    //                          ->orderBy('id')
    //                          ->findAll(5);
    //     }
    //     $data = array();
    //     foreach ($list_id as $ens) {
    //         $data[] = array(
    //             "id" => $ens["id"],
    //             "text" => $ens["nom"]
    //         );
    //     }
    //     $response['data'] = $data;    
    //     return $this->response->setJSON($response); 
    // }

    public function updateUE(){
        if(!session()->is_logged){return redirect()->route('login'); }
        $validation = service('validation');
        $validation->setRules([
            'code_ue' => 'required',
            'intitule' => 'required',
            'credit' => 'required',
            'parcours' => 'required',
            'specialite' => 'required',
            'semestre' => 'required'
        ]);
        if(!$validation->withRequest($this->request)->run()){
            return redirect()->back()
                            ->withInput()
                            ->with('errors', $validation->getErrors());
        }
        $data =  [
            'code_ue' => trim($this->request->getVar('code_ue')),
            'intitule' => trim($this->request->getVar('intitule')),
            'nb_credit' => trim($this->request->getVar('credit')),
            'id_parcours' => trim($this->request->getVar('parcours')),
            'id_specialite' => trim($this->request->getVar('specialite')),
            'id_semestre' => trim($this->request->getVar('semestre')),
            'object_ue' => trim($this->request->getVar('object')),
            'id_etablissement' => trim('FSA'),
            'id_cycle' => trim('L')
        ];
        $model = model('UEModel');
        if(!$model->save($data)){
            return redirect()->back()
                            ->withInput()
                            ->with('msg', [
                                'type' => 'warning',
                                'body' => 'Une erreur est surgie pzndant la modification, veuillez contactez votre administrateur'
                            ]);
        }
        return redirect('gestion_ue')->with('msg', [
            'type' => 'success',
            'body' => 'Modification réussie'
        ]);
    }
  
    public function updateAnnee(){
        if(!session()->is_logged){return redirect()->route('login'); }
        $validation = service('validation');
        $validation->setRules([
            'debut' => 'trim|required',
            'fin' => 'trim|required'
        ]);
        $token = csrf_hash();
        if(!$validation->withRequest($this->request)->run()){
            return $this->response->setJSON([
                'token' => $token,
                'error1' => $validation->getErrors()
            ]);      
        }
        $data = [
            'debut_anne' => date('Y-m-d', strtotime($this->request->getVar('debut'))),
            'fin_anne' => date('Y-m-d', strtotime($this->request->getVar('fin'))),
            'id_annee_acad' => date('Y', strtotime($this->request->getVar('debut'))).'-'.date('Y', strtotime($this->request->getVar('fin'))),
            'id_ets' => session()->id_ets,
        ];
        $model = model('SessionModel');
         if(!$model->update($this->request->getVar('id'), $data)){
            return $this->response->setJSON([
                'token' => $token,
                'error2' => 'Désolé l\'enregistrement n\'a pas abouti'
            ]);
         }
        return $this->response->setJSON([
            'token' => $token,
            'success' => 'Enregistrement réussi'
        ]);

                
    }

    public function updateSemestre(){
        $validation = service('validation');
        $validation->setRules([
            'id_semestre' => 'required|max_length[2]',
            'intitule' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            'annee_ac' => 'required'
        ]);
        $token = csrf_hash();
        if(!$validation->withRequest($this->request)->run()){
            return $this->response->setJSON([
                'token' => $token,
                'error1' => $validation->getErrors()
            ]);      
        }
        $data = [
            'id_semestre' => trim($this->request->getVar('id_semestre')),
            'intitule' => trim($this->request->getVar('intitule')),
            'debut' => date('Y-m-d', strtotime($this->request->getVar('debut'))),
            'fin' => date('Y-m-d', strtotime($this->request->getVar('fin'))),
            'id_annee_acad' => trim($this->request->getVar('annee_ac')),
            'id_ets' => session()->id_ets
        ];
        $model = model('semestreModel');
        if(!$model->save($data)){
            return $this->response->setJSON([
                'token' => $token,
                'error2' => 'Désolé l\'enregistrement n\'a pas abouti'
            ]);
        }
        return $this->response->setJSON([
            'token' => $token,
            'success' => 'Enregistrement réussi'
        ]);
    }

    // public function editCycle(int $id = null){
    //     if(!session()->is_logged){return redirect()->route('login'); }
    //     $model = model('cycleModel');
    //     if(!$cycle = $model->find($id)){
    //     //    throw errorException::forPageNotFound();
    //         echo "Page Not Found";
    //         exit();
    //     }
    //     $data['cycle'] = $cycle;
    //     return view('DPT/edit_cycle', $data);
    // }

    public function updateCycle(){
        if(!session()->is_logged){return redirect()->route('login'); }
        $validation = service('validation');
        $validation->setRules([
            'cycle' => 'required'
        ]);
        $token = csrf_hash();
        if(!$validation->withRequest($this->request)->run()){
            return $this->response->setJSON([
                'token' => $token,
                'error1' => $validation->getErrors()
            ]);      
        }
        $data = [
            'id_cycle' => trim($this->request->getVar('id')),
            'intitule' => trim($this->request->getVar('cycle')),
            'responsable' => trim($this->request->getVar('responsable')),
            'id_etablissement' => session()->id_ets
        ];
        $model = model('cycleModel');
        if(!$model->save($data)){
            return $this->response->setJSON([
                'token' => $token,
                'error2' => 'Désolé l\'enregistrement n\'a pas abouti'
            ]);
        }
        return $this->response->setJSON([
            'token' => $token,
            'success' => 'Modification réussie'
        ]);
    }




}