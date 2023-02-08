<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('BaseController.php');

class searchCtrl extends BaseController {
     
    public function __construct(){
        parent::__construct();
        //$this->load->library('session');
    }

	public function index(){
        $idCat = $this->input->get('idCat');
        $search = $this->input->get('search');
        $this->load->model('RechercheModel');
        $this->load->model('CategorieModel');
        $dataS['dataS'] = $this->CategorieModel->getAll();

        if ($idCat != null) {
            $data['data'] = $this->RechercheModel->Recherche1($search, $idCat);

            $this->load->view('headerClient',$dataS);
            $this->load->view('resultSearch', $data);
            $this->load->view('footerClient');    
        }
        else{
            $data['data'] = $this->RechercheModel->Recherche2($search);
            $this->load->view('headerClient',$dataS);
            $this->load->view('resultSearch', $data);
            $this->load->view('footerClient');
        }
        
    }
	
}

?>