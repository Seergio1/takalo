<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('BaseController.php');

class Disconnect extends BaseController {
    
    public function __construct(){
        parent::__construct();
        //$this->load->library('session');
    }
    
	public function index()
	{
        $this->session->unset_userdata('idUser');
        redirect(site_url('/LoginCtrl/index'));
	}

}

?>