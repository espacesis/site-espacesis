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
		$this->load->view('forum');
    }
//=========================================================================================================================
}