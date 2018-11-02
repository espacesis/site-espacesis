
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
        $this->db->set('matricule',$matricule);
        $this->db->set('numero',$telephone);
        $this->db->set('promotion',$promotion);
        return $this->db->insert($this->table_espace_esis_membre);
    }
 //=========================================================================================================================
 public function authentification($matricule){
    return $this->db->select('matricule')->where('matricule', $matricule)->get($this->table_espace_esis_membre)->result();  

} 
 
}