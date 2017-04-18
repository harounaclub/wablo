<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                         

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    //get informations from people connected
    
    function getInfo_admin($login,$password){
      $this->db->where('login_us',$login);
      $this->db->where('pass_us',$password);
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
    
    
     function getInfo_entreprise($id_entreprise){
      $this->db->where('id_en',$id_entreprise);
      
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



    function check_connection($login,$password){
      $this->db->where('login_us',$login);
      $this->db->where('pass_us',$password);
      $q = $this->db->get('inov_utilisateur_systeme');
    
      $count=0;

      if($q->num_rows()>0)
      {
         return True;        
      }
      else
      {
        return False;
      }


    }
   
   
    
   


}