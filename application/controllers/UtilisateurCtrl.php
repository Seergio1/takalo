<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UtilisateurCtrl extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        //$this->load->library('session');
    }

	public function inserer() 
    {
        $nom = $this->input->post('nom');
        $email = $this->input->post("email");
        $pwd = $this->input->post("pwd");
        $num = $this->input->post("num");

        $this->load->model('UtilisateurModel');
        $insert = $this->UtilisateurModel->insertUtilisateur($nom , $email , $pwd , $num);
	
        redirect(site_url('/LoginCtrl/index'));
    }

    public function checking() 
    {
        $pwd = $this->input->post('pwd');
        $email = $this->input->post("email");

        $this->load->model('UtilisateurModel');
        $connect = $this->UtilisateurModel->connect($email , $pwd);
        
        if ($connect == "oui") {
            redirect(site_url('/GetAllCategorieCtrl/getAllCat'));
        }
        else if($connect == "non"){
            redirect(site_url('/UtilisateurCtrl/accueilClient'));
        }
        else{
            $this->load->view('login');
        }
    }
    
    public function accueilClient()
    {
        $this->load->model('ObjetModel');
        $this->load->model('CategorieModel');

        $dataS['dataS'] = $this->CategorieModel->getAll();

        $data['data'] = $this->ObjetModel->getAll();
        $this->load->view('headerClient',$dataS);
        $this->load->view('getAllObjet', $data);
        $this->load->view('footerClient');
    }	

}

?>