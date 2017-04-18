<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Entreprise extends MX_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('entreprise_model');
    }

    public function index(){
        
        $this->load->view('main_view'); 
    }



    

}

/* End of file accueil.php */
/* Location: .//C/xampp/htdocs/annuaire.gouv/coeur/modules/accueil/controllers/accueil.php */ 