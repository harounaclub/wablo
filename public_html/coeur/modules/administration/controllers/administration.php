<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('administration_model');
        $this->load->model('valeur_model');
        $this->load->model('structure_model');
        $this->load->model('categorie_model');
        $this->load->model('personnel_model');
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
    
//----------------------- personnel

    function ajout_personnel_entreprise(){
	   
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
			
			
			
            $data["structure_list_gen"]=$this->structure_model->list_structure_en();
            $data["categories_list_gen"]=$this->categorie_model->list_categorie_en();
			$this->load->view('ajout_personnel_view',$data);
		}
	   
	   
	   
   }
    
    function ajout_personnel_entreprise_ajax(){
	   
	      if (!empty($_FILES)) {
                $tempFile = $_FILES['file']['tmp_name'];
                $fileName = $_FILES['file']['name'];
                $targetPath = getcwd() . '/uploads/';
                $targetFile = $targetPath . $fileName ;
                move_uploaded_file($tempFile, $targetFile);
                // if you want to save in db,where here
                // with out model just for example
                // $this->load->database(); // load database
                // $this->db->insert('file_table',array('file_name' => $fileName));
        }
        
        
        $structure_en=$this->input->post('structure_en');
        $categorie_en=$this->input->post('categorie_en');
        
        $id_entreprise=$this->session->userdata('id_entreprise');
        
    
        $this->lecture_excel_ajout_employe($fileName,$structure_en,$categorie_en,$id_entreprise);
        
        

	   
	   
   }
    
  function lecture_excel_ajout_employe($fileName,$structure_en,$categorie_en,$id_entreprise){
      
      $file = './uploads/'.$fileName;
		//load the excel library
		$this->load->library('excel');
		//read file from path
		$objPHPExcel = PHPExcel_IOFactory::load($file);
		//get only the Cell Collection
		$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
		//extract to a PHP readable array format
		foreach ($cell_collection as $cell) {
		    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
		    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
		    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
		    //header will/should be in row 1 only. of course this can be modified to suit your need.
		    if ($row == 1) {
		        $header[$row][$column] = $data_value;
		    } else {
		        $arr_data[$row][$column] = $data_value;
		    }
		}
		//send the data in an array format
		//$data['header'] = $header;
		$data['values'] = $arr_data;
		$nbre_fbo_apayer=count($arr_data)+3;


		//echo $fileName;
		$filename_prefix=substr($fileName, 0,6);
      
        		for ($i=2; $i < $nbre_fbo_apayer ; $i++) { 
						

						$civilite=$arr_data[$i]["A"];
						$nom=$arr_data[$i]["B"];
				        $prenom=$arr_data[$i]["C"];
				        $email=$arr_data[$i]["D"];
						$gsm=$arr_data[$i]["E"];
                    
                        $data_employe=array(	
         
                                'civilite' =>$civilite,
								'nom_pers' =>$nom,
								'prenom_pers' =>$prenom,
								'email_pers' =>$email,
								'telephone_mobile_us' =>$gsm,
								'id_entreprise' =>$id_entreprise,
								'id_categorie_personnel' =>$categorie_en,
								'id_structure' =>$structure_en,
							
								);
                    
                    
							$this->personnel_model->insert_personnel($data_employe);
							
                     }
    
  }
 
  function ajout_personnel_individuel(){
      
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
    
  function personnel_list_ajax(){
		
			$data["valeur_list"]=$this->categorie_model->list_categorie_en();
			$this->load->view('categorie_list_ajax_view',$data);
			
	}
  
 	function delete_personnel_ajax(){
		
		    $this->form_validation->set_rules('id_ajax', 'id_ajax', 'trim|required|xss_clean');
	   
	        if($this->form_validation->run())
			{
				$id_pkg=$this->input->post('id_ajax');
				$this->categorie_model->delete_categorie($id_pkg);
			}
			
	}

// --------------------------------------- fin personnel

    
}

