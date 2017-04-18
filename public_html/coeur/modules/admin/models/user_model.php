<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                         

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
   
   
    
	
	function list_user(){

       $q = $this->db->get('inov_utilisateur_systeme');
       
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }

   }
    
    function insert_user($data){			
        
        if($this->db->insert('inov_utilisateur_systeme',$data)){
            return true;
        }else{
            return false;
        }	
        
    } 
    
    
    function update_user($id,$data){
        $this->db->where('id_us', $id);
        if ($this->db->update('inov_utilisateur_systeme', $data)) {
            return true;
        } else {
            return false;
        }	
        
    }
    
		
    function delete_user($id_liste_valeur){
        $this->db->where('id_us',$id_liste_valeur);
        $this->db->delete('inov_utilisateur_systeme');
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