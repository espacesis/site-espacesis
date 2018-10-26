<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function query_to_membre(){

		$nomuser = strip_tags($this->input->post('nom'));
		$prenom = strip_tags($this->input->post('post-nom'));
		$promotion = strip_tags($this->input->post('promotion'));
		$matricule = strip_tags($this->input->post('matricule'));
		$data['name_new_membre'] = $nomuser;
		$data['last_name_new_membre'] = $prenom;
		$this->espace_model->add_membre_to_db($nomuser,$prenom,$prenom,$matricule);
		$this->load->view('succes',$data);
	}
}
