<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
		$this->load->model('user_model');
		$this->load->model('valeur_model');
        $this->load->model('categorie_model');
        $this->load->model('structure_model');
        $this->load->model('package_model');
        $this->load->model('entreprise_model');
    }
    


    public function index(){
        
         
        $this->load->view('main_view');
    }
	
	
 
	
	function ajout_administrateur(){
	   
	   $this->form_validation->set_rules('nom', 'nom d\'utilisateur', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('prenom', 'Mot de passe', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('email', 'nom d\'utilisateur', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('cel', 'Mot de passe', 'trim|required|xss_clean');
	   
	    if($this->form_validation->run())
		{
			echo "je suis dedans";
			 $nom=$this->input->post('nom');
	         $prenom=$this->input->post('prenom');
			 $email=$this->input->post('email');
	         $tel=$this->input->post('tel');
			 $cel=$this->input->post('cel');
			 $login=$email;
			 $pass=$this->user_model->password_generator();
			 $id_profil=$this->input->post('id_profil');
			
			 $data_info_admin=array(

                    'nom_us' =>$nom,
                    'prenom_us' =>$prenom,
                    'email_us' =>$email,
                    'telephone_fixe_us' =>$tel,
				    'telephone_mobile_us' =>$cel,
				    'login_us' =>$login,
				    'pass_us' =>$pass,
				    'id_profil' =>$id_profil,
                 
              );

            $this->user_model->insert_user($data_info_admin);
			
		
		}else{
            
            echo "je suis hors";
			
			
			$data["user_list"]=$this->user_model->list_user();
			$this->load->view('ajout_utilisateur_view',$data);
		}
	   
	   
	   
   }
	
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
				
				if($this->valeur_model->check_valeur($line)){
					
					$data_info_valeur=array('libelle_va' =>ucfirst($line));
				    $this->valeur_model->insert_valeur($data_info_valeur);
					
				}
				
				
			}
	        
			
			
			
		
		}else{
			
			
			$data["valeur_list"]=$this->valeur_model->list_valeur();
			$this->load->view('ajouter_valeur_view',$data);
		}
	   
	   
	   
   }
    
   	function ajout_categorie_entreprise(){
	   
	   $this->form_validation->set_rules('liste_categories_entreprise', 'categories entreprise', 'trim|required|xss_clean');
	  
	   
	    if($this->form_validation->run())
		{
			
			 $liste_categories_entreprises_brut=$this->input->post('liste_categories_entreprise');
			 $tbaleau_liste_categories_entreprises_brut= explode("@", $liste_categories_entreprises_brut);
			
			 
			$i=0;
			foreach($tbaleau_liste_categories_entreprises_brut as $valeur){
				
				if($valeur == ""){
					unset($tbaleau_liste_categories_entreprises_brut[$i]);
				}
				$i++;	
			}
			
			$tbaleau_liste_categories_entreprises_brut_unique = array_unique($tbaleau_liste_categories_entreprises_brut);
			
			print_r($tbaleau_liste_categories_entreprises_brut_unique);
			
			foreach($tbaleau_liste_categories_entreprises_brut_unique as $line){
				
				if($this->categorie_model->check_categorie($line)){
					
					$data_info_valeur=array('libelle_cap' =>ucfirst($line));
				    $this->categorie_model->insert_categorie($data_info_valeur);
					
				}
				
				
			}
	        
			
			
			
		
		}else{
			
			
			$data["categorie_list"]=$this->categorie_model->list_categorie();
			$this->load->view('ajouter_categorie_view',$data);
		}
	   
	   
	   
   }
    
    public function ajout_package_souscription(){
         
         
       $this->form_validation->set_rules('nom_package', 'nom_package', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('description_package', 'description_package', 'trim|required|xss_clean');
       $this->form_validation->set_rules('montant_package', 'montant_package', 'trim|required|xss_clean');
	  
	   
	    if($this->form_validation->run())
		{
			
			 $libelle=$this->input->post('nom_package');
             $description_module=$this->input->post('description_package');
	         $module_1=$this->input->post('module1');
			 $module_2=$this->input->post('module2');
	         $module_3=$this->input->post('module3');
			 $module_4=$this->input->post('module4');
             $montant_totale=$this->input->post('montant_package');
            
			
			 $data_info_admin=array(

                    'libelle_pkg' =>$libelle,
                    'desc_pkg' =>$description_module,
                    'module_1' =>$module_1,
                    'module_2' =>$module_2,
                    'module_3' =>$module_3,
				    'module_4' =>$module_4,
				    'montant_totale' =>$montant_totale    
              );

            $this->package_model->insert_package($data_info_admin);
           
			
		
		}else{
			
			
			$data["package_list"]=$this->package_model->list_package();
			$this->load->view('ajout_package_view',$data);
		}
        
         
       
    }
    
     public function ajout_entreprise(){
         
         
       $this->form_validation->set_rules('nom_entreprise', 'nom_entreprise', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('nom_sous','nom_sous', 'trim|required|xss_clean');
       $this->form_validation->set_rules('tel_mobile_sous', 'tel_mobile_sous', 'trim|required|xss_clean');
       $this->form_validation->set_rules('mode_paiement', 'mode_paiement', 'trim|required|xss_clean');
       
	  
	   
	    if($this->form_validation->run())
		{
			
			 $nom_entreprise=$this->input->post('nom_entreprise');
             $pays_entreprise=$this->input->post('pays_entreprise');
             $ville_entreprise=$this->input->post('ville_entreprise');
             $quartier_entreprise=$this->input->post('quartier_entreprise');
             $addr_postale_entreprise=$this->input->post('addr_postale');
	         $email_entreprise=$this->input->post('email_entreprise');
			 $telephone_fixe_en=$this->input->post('telephone_fixe_en');
	         $nom_sous=$this->input->post('nom_sous');
			 $prenom_sous=$this->input->post('prenom_sous');
             $email_sous=$this->input->post('email_sous');
             $tel_mobile_sous=$this->input->post('tel_mobile_sous');
             $mode_paiement=$this->input->post('mode_paiement');
             $package_entreprise=$this->input->post('package_entreprise');
            
             $login=$tel_mobile_sous;
			 $pass=$this->user_model->password_generator();
			 $id_profil=4;
            
             $info_package=explode("_", $package_entreprise);
             $info_paiement=explode("_", $mode_paiement);
            
             $status_paiement_sousen=1;
            
			
			 $data_info_generale_entrep=array(

                    'designation_entreprise' =>$nom_entreprise,
                    'ville_en' =>$ville_entreprise,
                    'addr_postale' =>$addr_postale_entreprise,
                    'quartier_en' =>$quartier_entreprise,
                    'pays_en' =>$pays_entreprise,
                    'ville_en' =>$ville_entreprise,
                    'email_en' =>$email_entreprise,
				    'telephone_fixe_en' =>$telephone_fixe_en,   
              );
            
            $id_entreprise=$this->entreprise_model->insert_entreprise($data_info_generale_entrep);
            
            $data_info_souscription=array(

                    'id_entreprise' =>$id_entreprise,
                    'designation_entreprise' =>$nom_entreprise,
                    'nom_sousen' =>$nom_sous,
                    'prenom_sousen' =>$prenom_sous,
                    'email_sousen' =>$email_sous,
				    'telephone_mobile_sousen' =>$tel_mobile_sous,
                    'id_mode_paiement' =>$info_paiement[1],
                    'mode_paiement' =>$info_paiement[0],
                    'package_en' =>$info_package[0],
                    'montant_sousen' =>$info_package[1],
                    'status_paiement_sousen' =>$status_paiement_sousen,
              );

            $this->entreprise_model->insert_souscription($data_info_souscription);

			 $data_info_admin=array(

                    'nom_us' =>$nom_sous,
                    'prenom_us' =>$prenom_sous,
                    'email_us' =>$email_sous,
                    'telephone_fixe_us' =>"",
				    'telephone_mobile_us' =>$tel_mobile_sous,
				    'login_us' =>$login,
				    'pass_us' =>$pass,
				    'id_profil' =>$id_profil,
                    'id_entreprise' =>$id_entreprise,
                 
              );

            $this->user_model->insert_user($data_info_admin);
           
			
		
		}else{
			
			
			$data["souscription_list"]=$this->entreprise_model->list_souscription();
            $data["package_list"]=$this->package_model->list_package();
            $data["paiement_list"]=$this->entreprise_model->list_paiement();
			$this->load->view('ajout_souscription_view',$data);
		}
        
         
       
    }
    
      function ajout_structure_entreprise(){
	   
	   $this->form_validation->set_rules('liste_structure_entreprise', 'structures entreprise', 'trim|required|xss_clean');
	  
	   
	    if($this->form_validation->run())
		{
			
			 $liste_structures_entreprises_brut=$this->input->post('liste_structure_entreprise');
			 $tbaleau_liste_structures_entreprises_brut= explode("@", $liste_structures_entreprises_brut);
			
			 
			$i=0;
			foreach($tbaleau_liste_structures_entreprises_brut as $valeur){
				
				if($valeur == ""){
					unset($tbaleau_liste_structures_entreprises_brut[$i]);
				}
				$i++;	
			}
			
			$tbaleau_liste_structures_entreprises_brut_unique = array_unique($tbaleau_liste_structures_entreprises_brut);
			
			print_r($tbaleau_liste_structures_entreprises_brut_unique);
			
			foreach($tbaleau_liste_structures_entreprises_brut_unique as $line){
				
				if($this->categorie_model->check_categorie($line)){
					
                    $id_entreprise=
					$data_info_valeur=array('libelle_se' =>ucfirst($line));
				    $this->structure_model->insert_structure($data_info_valeur);
					
				}
				
				
			}
	        
			
			
			
		
		}else{
			
			
			$data["structure_list"]=$this->structure_model->list_structure();
			$this->load->view('ajouter_structure_view',$data);
		}
	   
	   
	   
   }
    
    function logout(){
        
        $this->session->sess_destroy();
        redirect("login");
    }
	
	function user_list_ajax(){
		
			$data["user_list"]=$this->user_model->list_user();
			$this->load->view('user_list_ajax_view',$data);
			
	}
	
	function valeur_list_ajax(){
		
			$data["valeur_list"]=$this->valeur_model->list_valeur();
			$this->load->view('valeur_list_ajax_view',$data);
			
	}
    function categorie_list_ajax(){
		
			$data["categorie_list"]=$this->categorie_model->list_categorie();
			$this->load->view('categorie_list_ajax_view',$data);
			
	}
    
     function structure_list_ajax(){
		
			$data["structure_list"]=$this->structure_model->list_structure();
			$this->load->view('structure_list_ajax',$data);
			
	}
    
    function package_list_ajax(){
		
			$data["package_list"]=$this->package_model->list_package();
			$this->load->view('package_list_ajax',$data);
			
	}
    
    function souscription_list_ajax(){
        
           $data["souscription_list"]=$this->entreprise_model->list_souscription();
            $data["package_list"]=$this->package_model->list_package();
            $data["paiement_list"]=$this->entreprise_model->list_paiement();
			$this->load->view('souscription_list_ajax',$data);
    }
	
	function delete_user_ajax(){
		
		    $this->form_validation->set_rules('id_ajax', 'id_ajax', 'trim|required|xss_clean');
	   
	        if($this->form_validation->run())
			{
				$id_pkg=$this->input->post('id_ajax');
				$this->user_model->delete_user($id_pkg);
			}
			
	}
	
	function delete_valeur_ajax(){
		
		    $this->form_validation->set_rules('id_ajax', 'id_ajax', 'trim|required|xss_clean');
	   
	        if($this->form_validation->run())
			{
				$id_pkg=$this->input->post('id_ajax');
				$this->valeur_model->delete_valeur($id_pkg);
			}
			
	}
    
    function delete_categorie_ajax(){
		
		    $this->form_validation->set_rules('id_ajax', 'id_ajax', 'trim|required|xss_clean');
	   
	        if($this->form_validation->run())
			{
				$id_pkg=$this->input->post('id_ajax');
				$this->categorie_model->delete_categorie($id_pkg);
			}
			
	}
    
     function delete_structure_ajax(){
		
		    $this->form_validation->set_rules('id_ajax', 'id_ajax', 'trim|required|xss_clean');
	   
	        if($this->form_validation->run())
			{
				$id_pkg=$this->input->post('id_ajax');
				$this->structure_model->delete_structure($id_pkg);
			}
			
	}
    
    function delete_package_ajax(){
		
		    $this->form_validation->set_rules('id_ajax', 'id_ajax', 'trim|required|xss_clean');
	   
	        if($this->form_validation->run())
			{
				$id_pkg=$this->input->post('id_ajax');
				$this->package_model->delete_package($id_pkg);
			}
			
	}
    
    function delete_souscription_ajax(){
        
         $this->form_validation->set_rules('id_ajax', 'id_ajax', 'trim|required|xss_clean');
	   
	        if($this->form_validation->run())
			{
				$id_pkg=$this->input->post('id_ajax');
                $list_id=explode("_",$id_pkg);
				$this->entreprise_model->delete_souscription($list_id[0],$list_id[1]);
			}
        
    }
	
	

  
}


/* End of file accueil.php */
/* Location: .//C/xampp/htdocs/annuaire.gouv/coeur/modules/accueil/controllers/accueil.php */ 