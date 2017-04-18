<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                         

class Valeur_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
   
   function list_valeur(){

       $q = $this->db->get('inov_valeur');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }
    
	
	function list_valeur_en(){

       $q = $this->db->get('inov_valeur_en');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }
	
	  function check_valeur($libelle_vaen){
           
		   $this->db->where('libelle_vaen', $libelle_vaen);
		   $q = $this->db->get('inov_valeur_en');
		  
		  

		   if($q->num_rows()>0)
		   {
			  
			   return False;
			   
		   }else{
			   
			   return True;
		   }

	   }
    
    function insert_valeur($data){			
        
        if($this->db->insert('inov_valeur_en',$data)){
            return true;
        }else{
            return false;
        }	
        
    } 
    
    
    function update_valeur($id,$data){
        $this->db->where('id_us', $id);
        if ($this->db->update('inov_valeur_en', $data)) {
            return true;
        } else {
            return false;
        }	
        
    }
    
		
    function delete_valeur($id_liste_valeur){
        $this->db->where('id_vaen',$id_liste_valeur);
        $this->db->delete('inov_valeur_en');
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


    
   }