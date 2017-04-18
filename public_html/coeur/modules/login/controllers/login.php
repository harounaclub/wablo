<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
		
    }
    
    

        public function index(){

            $this->form_validation->set_rules('login', 'nom d\'utilisateur', 'trim|required|xss_clean');
            $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required|xss_clean');

            if($this->form_validation->run())
            {
                 $login=$this->input->post('login');
                 $mot_de_passe=$this->input->post('pass');

                 if($this->login_model->check_connection($login,$mot_de_passe))
                 {

                         $data['admin_informations']=$this->login_model->getInfo_admin($login,$mot_de_passe);

                         foreach ($data['admin_informations'] as $lign) {

                            $id = $lign->id_us;
                            $login = $lign->login_us; //sera egalement sont email
                            $nom_prenom = $lign->nom_us." ".$lign->prenom_us;
                            $profil_id = $lign->id_profil;


                        }

                        $store_data_inSession = array(
                          'id_us'  => $id,
                          'login_usr' => $login,
                          'nom_us'=> $nom_prenom,
                          'profil_id' => $profil_id,
                        );

                        $this->session->set_userdata($store_data_inSession);


                       redirect('admin');

                }
                else {

                     $data['error_message']='Login ou Mot de passe incorrect, Ressayez SVP';

                     $this->load->view('login/login_view',$data);
                 }


          }else{

                $this->load->view('login_view');
          }
     }
    
      public function login_entreprise(){

            $this->form_validation->set_rules('login', 'nom d\'utilisateur', 'trim|required|xss_clean');
            $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required|xss_clean');

            if($this->form_validation->run())
            {
                 $login=$this->input->post('login');
                 $mot_de_passe=$this->input->post('pass');

                 if($this->login_model->check_connection($login,$mot_de_passe))
                 {

                         $data['admin_informations']=$this->login_model->getInfo_admin($login,$mot_de_passe);

                         foreach ($data['admin_informations'] as $lign) {

                            $id = $lign->id_us;
                            $login = $lign->login_us; //sera egalement sont email
                            $nom_prenom = $lign->nom_us." ".$lign->prenom_us;
                            $profil_id = $lign->id_profil;
                            $id_entreprise= $lign->id_entreprise;
                             
                         $data['admin_entreprise']=$this->login_model->getInfo_entreprise($id_entreprise);
                          foreach($data['admin_entreprise'] as $info){
                              
                              $id_entreprise=$info->id_en;
                              $designation_entreprise=$info->designation_entreprise;
                              $pays_entreprise=$info->pays_en;
                          }


                        }

                        $store_data_inSession = array(
                          'id_us'  => $id,
                          'login_usr' => $login,
                          'nom_us'=> $nom_prenom,
                          'profil_id' => $profil_id,
                          'designation_entreprise'=> $designation_entreprise,
                          'pays_entreprise' => $pays_entreprise,
                          'id_entreprise' => $id_entreprise,
                        );
                     
                    

                        $this->session->set_userdata($store_data_inSession);


                       redirect('administration');

                }
                else {

                     $data['error_message']='Login ou Mot de passe incorrect, Ressayez SVP';

                     $this->load->view('login/login_en_view',$data);
                 }


          }else{

                $this->load->view('login/login_en_view');
          }
     }
                
}
 

                
            
            
                

             
                
            
        