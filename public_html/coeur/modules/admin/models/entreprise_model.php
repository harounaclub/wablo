<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                         

class Entreprise_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
   
   
    
	
	function list_entreprise(){

       $q = $this->db->get('inov_entreprise');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }
	
	  function check_entreprise($libelle_se){
           
		   $this->db->where('libelle_en', $libelle_se);
		   $q = $this->db->get('inov_entreprise');
		  
		  

		   if($q->num_rows()>0)
		   {
			  
			   return False;
			   
		   }else{
			   
			   return True;
		   }

	   }
    
    function insert_entreprise($data){			
        
        if($this->db->insert('inov_entreprise',$data)){
            $last_id = $this->db->insert_id();
            return $last_id;
        }else{
            return false;
        }	
        
    } 
    
    
    function update_entreprise($id,$data){
        $this->db->where('id_en', $id);
        if ($this->db->update('inov_entreprise', $data)) {
            return true;
        } else {
            return false;
        }	
        
    }
    
		
    function delete_entreprise($id_liste_entreprise){
        $this->db->where('id_en',$id_liste_entreprise);
        $this->db->delete('inov_entreprise');
		return true;
    } 
	
	function password_generator() {
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); 
		$alphaLength = strlen($alphabet) - 1; 
		for ($i = 0; $i < 5; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); 
   } 

// -----------------------------------------------------------------------------------------

function list_souscription(){

       $q = $this->db->get('inov_souscription_en');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }
    
      function list_paiement(){

       $q = $this->db->get('inov_mode_paiement');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }
	
	  function check_souscription($nom_entrerprise){
           
		   $this->db->where('nom_entrerprise', $nom_entrerprise);
		   $q = $this->db->get('inov_souscription_en');
		  
		  

		   if($q->num_rows()>0)
		   {
			  
			   return False;
			   
		   }else{
			   
			   return True;
		   }

	   }
    
    function insert_souscription($data){			
        
        if($this->db->insert('inov_souscription_en',$data)){
            return true;
        }else{
            return false;
        }	
        
    } 
    
    
    function update_souscription($id,$data){
        $this->db->where('id_en', $id);
        if ($this->db->update('inov_souscription_en', $data)) {
            return true;
        } else {
            return false;
        }	
        
    }
    
		
    function delete_souscription($id_sous,$id_entreprise){
        
        $this->db->where('id_sousen',$id_sous);
        $this->db->delete('inov_souscription_en');
        
        $this->db->where('id_en',$id_entreprise);
        $this->db->delete('inov_entreprise');
        
        $this->db->where('id_entreprise',$id_entreprise);
        $this->db->delete('inov_utilisateur_systeme');
        
		return true;
    } 
	
	


    
   }