<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('BaseController.php');

class CategorieCtrl extends BaseController {
    
    public function __construct(){
        parent::__construct();
       // $this->load->library('session');
    }

	public function insert(){
        $nom = $this->input->get('nom');

        $this->load->model('CategorieModel');
        $insert = $this->CategorieModel->insert($nom);

        $data['data'] = $this->CategorieModel->getAll();
        $this->load->view('headerAdmin');
        $this->load->view('categorie',$data);
        $this->load->view('footerAdmin');

    }
    public function update(){
        $nom = $this->input->get('nom');
        $id = $this->input->get('id');

        $this->load->model('CategorieModel');
        $update = $this->CategorieModel->update($nom, $id);
	
        $data['data'] = $this->CategorieModel->getAll();
        $this->load->view('headerAdmin');
        $this->load->view('categorie',$data);
        $this->load->view('footerAdmin');
    }
    public function delete() {
        $id = $this->input->get('id');

        $this->load->model('CategorieModel');
        $update = $this->CategorieModel->delete($id);
	
        $data['data'] = $this->CategorieModel->getAll();
        $this->load->view('headerAdmin');
        $this->load->view('categorie',$data);
        $this->load->view('footerAdmin');
     }
	
}

?>