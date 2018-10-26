
<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Espace_model extends CI_Model {
    
//==================================================================================================================
    /*@ Attribut prive representant une table */
    private $table_espace_esis_membre = 'membre';
//=========================================================================================================================
    /*@ function constructeur du contoller welcome */
    function __construct(){
        parent::__construct();
    }
//=========================================================================================================================
    /*@ Ajoute un membre dans la table membre */
    public function add_membre_to_db(string $nom, string $prenonom, string $promotion, string $matricule,string $telephone){

        $this->db->set('nom',$nom);
        $this->db->set('prenom',$prenonom);
        $this->db->set('promotion',$promotion);
        $this->db->set('matricule',$matricule);
        $this->db->set('numero',$telephone);
        return $this->db->insert($this->table_espace_esis_membre);
    }
 //=========================================================================================================================
     
}