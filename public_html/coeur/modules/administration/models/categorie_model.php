<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                         

class Categorie_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
   
   function list_categorie(){

       $q = $this->db->get('inov_categorie_personnel');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }
    
	
	function list_categorie_en(){

       $q = $this->db->get('inov_categorie_personnel_p');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }
	
	  function check_categorie($libelle_capp){
           
		   $this->db->where('libelle_capp', $libelle_capp);
		   $q = $this->db->get('inov_categorie_personnel_p');
		  
		  

		   if($q->num_rows()>0)
		   {
			  
			   return False;
			   
		   }else{
			   
			   return True;
		   }

	   }
    
    function insert_categorie($data){			
        
        if($this->db->insert('inov_categorie_personnel_p',$data)){
            return true;
        }else{
            return false;
        }	
        
    } 
    
    
    function update_categorie($id,$data){
        $this->db->where('id_capp', $id);
        if ($this->db->update('inov_categorie_personnel_p', $data)) {
            return true;
        } else {
            return false;
        }	
        
    }
    
		
    function delete_categorie($id_liste_categorie){
        $this->db->where('id_capp',$id_liste_categorie);
        $this->db->delete('inov_categorie_personnel_p');
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