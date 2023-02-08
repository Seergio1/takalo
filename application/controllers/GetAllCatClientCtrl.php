<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('BaseController.php');

class GetAllCatClientCtrl extends BaseController {
    
    public function __construct(){
        parent::__construct();
       // $this->load->library('session');
    }	
    
    public function index()
	{
		$this->load->model('CategorieModel');

        $dataS['dataS'] = $this->CategorieModel->getAll();
        $this->load->view('headerClient',$dataS);
        $this->load->view('ajouter',$dataS);
        $this->load->view('footerClient');
		
	}
    public function index2()
	{
        $this->load->model('ObjetModel');
        $data['data'] = $this->ObjetModel->getAll();
		$this->load->model('CategorieModel');
        $dataS['dataS'] = $this->CategorieModel->getAll();
        $this->load->view('headerClient',$dataS);
        $this->load->view('getAllObjet', $data);
        $this->load->view('footerClient');
		
	}
    public function index3(){
        $this->load->model('EchangeModel');
        $array = $this->EchangeModel->getAllDemande();
        $data1 = array();
        $data2 = array();
        $data3 = array();
        $this->load->model('ObjetModel');
        for ($i=0; $i < count($array); $i++) 
        { 
            array_push($data1, $this->ObjetModel->getObjetById($array[$i]['idObjet1']));
            array_push($data2, $this->ObjetModel->getObjetById($array[$i]['idObjet2']));
            array_push($data3, $array[$i]['id']);
        }
        $data['data1'] = $data1;
        $data['data2'] = $data2;
        $data['data3'] = $data3;

        $this->load->model('CategorieModel');
        $dataS['dataS'] = $this->CategorieModel->getAll();
        $this->load->view('headerClient',$dataS);
        $this->load->view('demandeEnvoyer', $data);
        $this->load->view('footerClient');
    }
    public function index4(){
        $this->load->model('EchangeModel');
        $array = $this->EchangeModel->getAllRecu();
        $data1 = array();
        $data2 = array();
        $data3 = array();
        $this->load->model('ObjetModel');
        for ($i=0; $i < count($array); $i++) 
        { 
            array_push($data1, $this->ObjetModel->getObjetById($array[$i]['idObjet1']));
            array_push($data2, $this->ObjetModel->getObjetById($array[$i]['idObjet2']));
            array_push($data3, $array[$i]['id']);
        }
        $data['data1'] = $data1;
        $data['data2'] = $data2;
        $data['data3'] = $data3;

        
        $this->load->model('CategorieModel');
        $dataS['dataS'] = $this->CategorieModel->getAll();
        $this->load->view('headerClient',$dataS);
        $this->load->view('demandeRecu', $data);
        $this->load->view('footerClient');
    }
    public function index5(){
        $this->load->model('ObjetModel');
        $this->load->model('CategorieModel');
        $data['data'] = $this->ObjetModel->getMesObjets();
        $dataS['dataS'] = $this->CategorieModel->getAll();
        $this->load->view('headerClient',$dataS);
        $this->load->view('listeMesObjets', $data);
        $this->load->view('footerClient');
    }
    public function index6(){
        
    }


}

?>