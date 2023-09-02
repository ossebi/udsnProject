<?php

namespace App\Controllers\DSE;

use App\Controllers\BaseController;

class Scolarity extends BaseController
{
	public function index()
	{
		if(!session()->is_logged){return redirect()->route('login');}
        return view('DSE/home');	
	}

	public function gestionInscription(){
		if(!session()->is_logged){return redirect()->route('login');}
        return view('DSE/gestion_inscription');
	}

	public function gestionEtudiant(){
		if(!session()->is_logged){return redirect()->route('login');}
        return view('DSE/gestion_etudiant');
	}

	public function etudiant(){
		if(!session()->is_logged){return redirect()->route('login');}
        return view('DSE/etudiant');
	}
}
