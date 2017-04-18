<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                         

class Package_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
   
   
    
	
	function list_package(){

       $q = $this->db->get('inov_package');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }
	
	  function check_package($libelle_se){
           
		   $this->db->where('libelle_se', $libelle_se);
		   $q = $this->db->get('inov_package');
		  
		  

		   if($q->num_rows()>0)
		   {
			  
			   return False;
			   
		   }else{
			   
			   return True;
		   }

	   }
    
    function insert_package($data){			
        
        if($this->db->insert('inov_package',$data)){
            return true;
        }else{
            return false;
        }	
        
    } 
    
    
    function update_package($id,$data){
        $this->db->where('id_pkg', $id);
        if ($this->db->update('inov_package', $data)) {
            return true;
        } else {
            return false;
        }	
        
    }
    
		
    function delete_package($id_liste_package){
        $this->db->where('id_pkg',$id_liste_package);
        $this->db->delete('inov_package');
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