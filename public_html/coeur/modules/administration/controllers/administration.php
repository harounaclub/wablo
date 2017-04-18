<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('administration_model');
        $this->load->model('valeur_model');
        $this->load->model('structure_model');
        $this->load->model('categorie_model');
    }


    public function index()
    {
        
         
        $this->load->view('main_view');
    }
    
//----------------------- Valeurs entreprises

    function ajout_valeur_entreprise(){
	   
	   $this->form_validation->set_rules('liste_valeur_entreprise', 'valeur entreprise', 'trim|required|xss_clean');
	  
	   
	    if($this->form_validation->run())
		{
			
			 $liste_valeur_entreprises_brut=$this->input->post('liste_valeur_entreprise');
			 $tbaleau_liste_valeur_entreprises_brut= explode("@", $liste_valeur_entreprises_brut);
			
			 
			$i=0;
			foreach($tbaleau_liste_valeur_entreprises_brut as $valeur){
				
				if($valeur == ""){
					unset($tbaleau_liste_valeur_entreprises_brut[$i]);
				}
				$i++;	
			}
			
			$tbaleau_liste_valeur_entreprises_brut_unique = array_unique($tbaleau_liste_valeur_entreprises_brut);
			
			print_r($tbaleau_liste_valeur_entreprises_brut_unique);
			
			foreach($tbaleau_liste_valeur_entreprises_brut_unique as $line){
				
                $id_entreprise=$this->session->userdata('id_entreprise');
				if($this->valeur_model->check_valeur($line)){
					
					$data_info_valeur=array(
                        
                        'id_entreprise' =>$id_entreprise,
                        'libelle_vaen' =>ucfirst($line),
                    );
				    $this->valeur_model->insert_valeur($data_info_valeur);
					
				}
				
				
			}
	        
			
			
			
		
		}else{
			
			
			$data["valeur_list"]=$this->valeur_model->list_valeur_en();
            $data["valeur_list_gen"]=$this->valeur_model->list_valeur();
			$this->load->view('ajout_valeur_view',$data);
		}
	   
	   
	   
   }
 
  function ajout_valeur_individuel(){
      
       $this->form_validation->set_rules('valeur', 'valeur entreprise', 'trim|required|xss_clean');
	  
	   
	    if($this->form_validation->run())
        {
             $valeur=$this->input->post('valeur');
             $id_entreprise=$this->session->userdata('id_entreprise');
				if($this->valeur_model->check_valeur($valeur)){
					
					$data_info_valeur=array(
                        
                        'id_entreprise' =>$id_entreprise,
                        'libelle_vaen' =>ucfirst($valeur),
                    );
				    $this->valeur_model->insert_valeur($data_info_valeur);
					
				}
            
        }
      
      
  }
    
  function valeur_list_ajax(){
		
			$data["valeur_list"]=$this->valeur_model->list_valeur_en();
			$this->load->view('valeur_list_ajax_view',$data);
			
	}
  
 	function delete_valeur_ajax(){
		
		    $this->form_validation->set_rules('id_ajax', 'id_ajax', 'trim|required|xss_clean');
	   
	        if($this->form_validation->run())
			{
				$id_pkg=$this->input->post('id_ajax');
				$this->valeur_model->delete_valeur($id_pkg);
			}
			
	}

// --------------------------------------- fin valeurs entreprises
    
//----------------------- Structure entreprise personnalise

    function ajout_structure_entreprise(){
	   
	   $this->form_validation->set_rules('liste_valeur_entreprise', 'valeur entreprise', 'trim|required|xss_clean');
	  
	   
	    if($this->form_validation->run())
		{
			
			 $liste_valeur_entreprises_brut=$this->input->post('liste_valeur_entreprise');
			 $tbaleau_liste_valeur_entreprises_brut= explode("@", $liste_valeur_entreprises_brut);
			
			 
			$i=0;
			foreach($tbaleau_liste_valeur_entreprises_brut as $valeur){
				
				if($valeur == ""){
					unset($tbaleau_liste_valeur_entreprises_brut[$i]);
				}
				$i++;	
			}
			
			$tbaleau_liste_valeur_entreprises_brut_unique = array_unique($tbaleau_liste_valeur_entreprises_brut);
			
			print_r($tbaleau_liste_valeur_entreprises_brut_unique);
			
			foreach($tbaleau_liste_valeur_entreprises_brut_unique as $line){
				
                $id_entreprise=$this->session->userdata('id_entreprise');
				if($this->structure_model->check_structure($line)){
					
					$data_info_valeur=array(
                        
                        'id_entreprise' =>$id_entreprise,
                        'libelle_sep' =>ucfirst($line),
                    );
				    $this->structure_model->insert_structure($data_info_valeur);
					
				}
				
				
			}
	        
			
			
			
		
		}else{
			
			
			$data["valeur_list"]=$this->structure_model->list_structure_en();
            $data["valeur_list_gen"]=$this->structure_model->list_structure();
			$this->load->view('ajout_structure_view',$data);
		}
	   
	   
	   
   }
 
  function ajout_structure_individuel(){
      
       $this->form_validation->set_rules('valeur', 'valeur entreprise', 'trim|required|xss_clean');
	  
	   
	    if($this->form_validation->run())
        {
             $valeur=$this->input->post('valeur');
             $id_entreprise=$this->session->userdata('id_entreprise');
				if($this->structure_model->check_structure($valeur)){
					
					$data_info_valeur=array(
                        
                        'id_entreprise' =>$id_entreprise,
                        'libelle_sep' =>ucfirst($valeur),
                    );
				    $this->structure_model->insert_structure($data_info_valeur);
					
				}
            
        }
      
      
  }
    
  function structure_list_ajax(){
		
			$data["valeur_list"]=$this->structure_model->list_structure_en();
			$this->load->view('structure_list_ajax_view',$data);
			
	}
  
 	function delete_structure_ajax(){
		
		    $this->form_validation->set_rules('id_ajax', 'id_ajax', 'trim|required|xss_clean');
	   
	        if($this->form_validation->run())
			{
				$id_pkg=$this->input->post('id_ajax');
				$this->structure_model->delete_structure($id_pkg);
			}
			
	}

// --------------------------------------- fin structure entreprise personnalise
    
//----------------------- categories personnel

    function ajout_categorie_entreprise(){
	   
	   $this->form_validation->set_rules('liste_valeur_entreprise', 'valeur entreprise', 'trim|required|xss_clean');
	  
	   
	    if($this->form_validation->run())
		{
			
			 $liste_valeur_entreprises_brut=$this->input->post('liste_valeur_entreprise');
			 $tbaleau_liste_valeur_entreprises_brut= explode("@", $liste_valeur_entreprises_brut);
			
			 
			$i=0;
			foreach($tbaleau_liste_valeur_entreprises_brut as $valeur){
				
				if($valeur == ""){
					unset($tbaleau_liste_valeur_entreprises_brut[$i]);
				}
				$i++;	
			}
			
			$tbaleau_liste_valeur_entreprises_brut_unique = array_unique($tbaleau_liste_valeur_entreprises_brut);
			
			print_r($tbaleau_liste_valeur_entreprises_brut_unique);
			
			foreach($tbaleau_liste_valeur_entreprises_brut_unique as $line){
				
                $id_entreprise=$this->session->userdata('id_entreprise');
				if($this->categorie_model->check_categorie($line)){
					
					$data_info_valeur=array(
                        
                        'id_entreprise' =>$id_entreprise,
                        'libelle_capp' =>ucfirst($line),
                    );
				    $this->categorie_model->insert_categorie($data_info_valeur);
					
				}
				
				
			}
	        
			
			
			
		
		}else{
			
			
			$data["valeur_list"]=$this->categorie_model->list_categorie_en();
            $data["valeur_list_gen"]=$this->categorie_model->list_categorie();
			$this->load->view('ajout_categorie_view',$data);
		}
	   
	   
	   
   }
 
  function ajout_categorie_individuel(){
      
       $this->form_validation->set_rules('valeur', 'valeur entreprise', 'trim|required|xss_clean');
	  
	   
	    if($this->form_validation->run())
        {
             $valeur=$this->input->post('valeur');
             $id_entreprise=$this->session->userdata('id_entreprise');
				if($this->categorie_model->check_categorie($valeur)){
					
					$data_info_valeur=array(
                        
                        'id_entreprise' =>$id_entreprise,
                        'libelle_capp' =>ucfirst($valeur),
                    );
				    $this->categorie_model->insert_categorie($data_info_valeur);
					
				}
            
        }
      
      
  }
    
  function categorie_list_ajax(){
		
			$data["valeur_list"]=$this->categorie_model->list_categorie_en();
			$this->load->view('categorie_list_ajax_view',$data);
			
	}
  
 	function delete_categorie_ajax(){
		
		    $this->form_validation->set_rules('id_ajax', 'id_ajax', 'trim|required|xss_clean');
	   
	        if($this->form_validation->run())
			{
				$id_pkg=$this->input->post('id_ajax');
				$this->categorie_model->delete_categorie($id_pkg);
			}
			
	}

// --------------------------------------- fin categories personnel

    
}

