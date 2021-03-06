<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                         

class Structure_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
   
   
    
	
	function list_structure(){

       $q = $this->db->get('inov_structure_entreprise');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }
	
	  function check_structure($libelle_se){
           
		   $this->db->where('libelle_se', $libelle_se);
		   $q = $this->db->get('inov_structure_entreprise');
		  
		  

		   if($q->num_rows()>0)
		   {
			  
			   return False;
			   
		   }else{
			   
			   return True;
		   }

	   }
    
    function insert_structure($data){			
        
        if($this->db->insert('inov_structure_entreprise',$data)){
            return true;
        }else{
            return false;
        }	
        
    } 
    
    
    function update_structure($id,$data){
        $this->db->where('id_se', $id);
        if ($this->db->update('inov_structure_entreprise', $data)) {
            return true;
        } else {
            return false;
        }	
        
    }
    
		
    function delete_structure($id_liste_structure){
        $this->db->where('id_se',$id_liste_structure);
        $this->db->delete('inov_structure_entreprise');
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