<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class espace_model extends CI_Model {
    private $table_espace_esis_membre = 'membre';
    function __construct(){
        parent::__construct();
    }

    public function add_membre_to_db(string $nom, string $prenonom, string $promotion, string $matricule){

        $this->db->set('nom',$nom);
        $this->db->set('prenom',$prenonom);
        $this->db->set('promotion',$promotion);
        $this->db->set('matricule',$matricule);
        return $this->db->insert($this->table_espace_esis_membre);
    }
}