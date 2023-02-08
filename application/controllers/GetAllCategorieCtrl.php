<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('BaseController.php');

class GetAllCategorieCtrl extends BaseController {
    
    public function __construct(){
        parent::__construct();
        //$this->load->library('session');
    }
    
    public function getAllCat()
	{
		$this->load->model('CategorieModel');

        $data['data'] = $this->CategorieModel->getAll();
        $this->load->view('headerAdmin');
        $this->load->view('categorie',$data);
        $this->load->view('footerAdmin');
		
	}		
}

?>