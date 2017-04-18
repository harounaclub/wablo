<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                         

class Personnel_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
   
   function list_personnel(){

       $q = $this->db->get('inov_personnel_entreprise');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }
    
	
	function list_personnel_en(){

       $q = $this->db->get('inov_personnel');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }
	
	  function check_personnel($libelle_sep){
           
		   $this->db->where('libelle_sep', $libelle_sep);
		   $q = $this->db->get('inov_personnel');
		  
		  

		   if($q->num_rows()>0)
		   {
			  
			   return False;
			   
		   }else{
			   
			   return True;
		   }

	   }
    
    function insert_personnel($data){			
        
        if($this->db->insert('inov_personnel',$data)){
            return true;
        }else{
            return false;
        }	
        
    } 
    
    
    function update_personnel($id,$data){
        $this->db->where('id_pers', $id);
        if ($this->db->update('inov_personnel', $data)) {
            return true;
        } else {
            return false;
        }	
        
    }
    
		
    function delete_personnel($id_liste_personnel){
        $this->db->where('id_pers',$id_liste_personnel);
        $this->db->delete('inov_personnel');
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