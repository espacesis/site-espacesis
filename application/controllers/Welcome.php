<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
//=========================================================================================================================
    /*@ function constructeur du contoller welcome */
	function __construct(){
		parent::__construct();
	}
//=========================================================================================================================
    /*@ l'index de la classe(controller->welcome) */
	public function index(){
		$this->load->view('welcome_message');
	}
//=========================================================================================================================
	/*@ Reccupere les infos du user et passe au model espace_model qui lui fait appel a la methode add_membre_to_db() */
	public function add(){

		$nomuser = strip_tags($this->input->post('nom'));
		$prenom = strip_tags($this->input->post('prenom'));
		$promotion = strip_tags($this->input->post('promotion'));
		$matricule = strip_tags($this->input->post('matricule'));
		$phone = strip_tags($this->input->post('phone'));
		$data['name_new_membre'] = $nomuser;
		$data['last_name_new_membre'] = $prenom;
		$this->espace_model->add_membre_to_db($nomuser,$prenom,$prenom,$matricule,$phone);
		$this->load->view('header');
		$this->load->view('acceuil',$data);
		$this->load->view('footer');
	}
//=============================================================================================================================

//La page de connexion
public function login() {
	$mdp = strip_tags($this->input->post('mdp'));
	$matricule = strip_tags($this->input->post('matricule'));
	$r = $this->espace_model->authentification($matricule);
	if($r and $mdp == "esis@") {
		$this->load->view('header');
		$this->load->view('acceuil');
		$this->load->view('footer');
	}
	else {
		$this->index();
	}
}
public function creation() {
	$this->load->view('inscription');
}
//=============================================================================================================
}

