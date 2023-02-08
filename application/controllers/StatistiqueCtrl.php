<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('BaseController.php');

class StatistiqueCtrl extends BaseController {
     
    public function __construct(){
        parent::__construct();
       // $this->load->library('session');
    }

	public function index(){
        $this->load->model('StatModel');
        $data['dataUI'] = $this->StatModel->countUtilisateurInscrit();
        $data['dataE'] = $this->StatModel->countEchange();
        // echo $data['dataE'];
        $this->load->view('headerAdmin');
        $this->load->view('stat',$data);
        $this->load->view('footerAdmin');
    }
	
}

?>