<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                         

class Souscription_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    //get informations from people connected
   
   
    function insert_souscription($data){			
        
        if($this->db->insert('souscription',$data)){
            return true;
        }else{
            return false;
        }	
        
    } 
    
    
    function update_souscription($id,$data){
        $this->db->where('id_souscription', $id);
        if ($this->db->update('souscription', $data)) {
            return true;
        } else {
            return false;
        }	
        
    }
    
		
    function delete_souscription($id_souscription){
        $this->db->where('id_souscription',$id_souscription);
        $this->db->delete('souscription');
    }
    
    //la table des packages
    function liste_package(){
        
        $data = array();
        
        $this->db->select('*');
        $this->db->from('package');
        $q = $this->db->get();        
        
        if($q->num_rows()>0){
          
            foreach ($q->result() as $lign){
              $data[]=$lign;
            }
          
          return $data;
        }
        
    }

    function souscrit_existe($nom_societe){
        
        
    }
    
    
    function get_souscription($id_souscription){
        
        $data = array();
        
        $this->db->select('*');
        $this->db->from('souscription');
        $this->db->where('id_souscription',$id_souscription);
        $q = $this->db->get();        
        
        if($q->num_rows()>0){
          
            foreach ($q->result() as $lign){
              $data[] = $lign;
            }
          
          return $data;
        }
        
    }
    
    
    function montant_package($id_package){
        
        $data = "";
        
        $this->db->select('*');
        $this->db->from('package');
        $this->db->where('id_package',$id_package);
        $q = $this->db->get();        
        
        if($q->num_rows()>0){
          
            foreach ($q->result() as $lign){
              $data = $lign->montant_package;
            }
          
          return $data;
        }
        
    }
    
    
    function insert_societe($data){			
        
        if($this->db->insert('societe',$data)){
            return true;
        }else{
            return false;
        }	
        
    } 
    
    
    
   }