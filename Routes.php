<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->group('auth', [ 'namespace' => 'App\Controllers\Auth'], function($routes){
    $routes->get('login', 'Login::login', ['as' => 'login']);

    $routes->get('register', 'Register::register');

    $routes->get('info', 'Register::info', ['as' => 'info']);

    $routes->post('sign_in', 'Login::sign_in', ['as' => 'sign_in']);

    $routes->post('sign_up', 'Register::sign_up', ['as' => 'sign_up']);

    $routes->get('sign_out', 'Login::sign_out', ['as' => 'sign_out']);

    $routes->get('plus-info', 'Register::plusinfo', ['as' => 'plus_info']);

    $routes->post('sign-up-info', 'Register::sign_up_info', ['as' => 'sign_up_info']);

});

$routes->group('departement', [ 'namespace' => 'App\Controllers\DPT'], function($routes){
    
    $routes->get('chef-departement/home', 'DPT::index', ['as' => 'home_departement']);

    $routes->get('chef-departement/attente-validation', 'DPT::attente', ['as' => 'attente']);

    $routes->get('chef-departement/annee-academique', 'DPT::gestion_annee', ['as' => 'annee_academique']);
    
    $routes->get('chef-departement/ajout-annee-academique', 'DPT::add_annee', ['as' => 'add_annee']);

    $routes->post('chef-departement/add-Annee', 'DPT::create_Annee', ['as' => 'addAnnee']);

    $routes->post('validation', 'DPT::validation', ['as' => 'validation']);

    $routes->get('chef-departement/gestion-parcours', 'DPT::gestion_parcours', ['as' => 'gestion_parcours']);

    $routes->get('chef-departement/ajout-parcours', 'DPT::add_parcours', ['as' => 'add_parcours']);

    $routes->post('chef-departement/add-parcours', 'DPT::create_parcours', ['as' => 'addparcours']);

    $routes->post('chef-departement/delete-parcours', 'DPT::delete_parcours', ['as' => 'deleteparcours']);

    $routes->get('chef-departement/gestion-ue', 'DPT::gestion_ue', ['as' => 'gestion_ue']);

    $routes->get('chef-departement/ajout-ue', 'DPT::add_ue', ['as' => 'add_ue']);

    $routes->post('chef-departement/competence-ue', 'DPT::competence_ue', ['as' => 'competence_ue']);

    $routes->post('chef-departement/add-ue', 'DPT::create_ue', ['as' => 'addue']);

    $routes->post('chef-departement/delete-ue', 'DPT::delete_ue', ['as' => 'deleteue']);

    $routes->post('chef-departement/trie', 'DPT::trie', ['as' => 'trie']);
    // *********************************
    
    $routes->get('All-ecues', 'DPT::All_ecues',['as' => 'All-ecues']);

    $routes->get('ajouter-ecues', 'DPT::ajouter_ecues',['as' => 'ajouter-ecues']);

    $routes->post('traitement-ecues', 'DPT::traitement_ecues',['as' => 'traitement-ecues']);

    $routes->post('M_S_ecue', 'DPT::M_S_ecue',['as' => 'M_S_ecue']);
    
});

$routes->group('etudiant', [ 'namespace' => 'App\Controllers\Etudiant'], function($routes){

    $routes->get('etudiant/home', 'Etudiant::index', ['as' => 'home_etudiant']);

    $routes->get('etudiant/profil', 'Etudiant::profil', ['as' => 'profil_etudiant']);

    $routes->post('etudiant/enregistrement', 'Etudiant::enregistrement', ['as' => 'enregistrement']);

    $routes->get('etudiant/calendrier-controle-continue', 'Etudiant::calendrier_cc', ['as' => 'calendrier_cc']);

});


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}