<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum_model extends CI_Model {

//==================================================================================================================
    /*@ Attribut prive representant une table */
    private $table_espace_esis_message_forum ='forum_message';

    function __construct(){
        parent::__construct();
    }

    //================================================================================================================
        /*@ ajoute un message dans la table forum_message */
    public function add_question_in_db(string $nom, string $message){

        $this->db->set('nom',$nom);
        $this->db->set('message',$message);
        return $this->db->insert($this->table_espace_esis_message_forum);
    }

    //================================================================================================================
        /*@ supprime un message dans la table forum_message */
    public function delete_one_message_in_db(int $id){
        return $this->db->where('id_message',$id)->delete($this->table_espace_esis_message_forum)->get()->result();
    }

    //================================================================================================================
        /*@ reccupere les 10 recents messages dans la table forum_message */
    public function get_message_have_db(){
        return $this->db->select()->order_by('id_message','desc')->limit(10,0)->get($this->table_espace_esis_message_forum)->result();
    }

    //==================================================================================================================
        /*@ reccupere un message specifique dans la table forum_message a l'aide son ID */
    public function get_one_message_in_db(int $id){
        return $this->db->where('id_message',$id)->get($this->table_espace_esis_message_forum)->result();
    }
    
    //===================================================================================================================
        /*@ Compte tous les messages existant dans la table forum_message */
    public function count_message_in_db(){
         return (int) $this->db->count_all_results($this->table_espace_esis_message_forum);
    }
}