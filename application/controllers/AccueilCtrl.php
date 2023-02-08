<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('BaseController.php');

class AccueilCtrl extends BaseController 
{
    public function __construct(){
        parent::__construct();
    }

	public function index() 
    {
        $idProduit = $this->input->get('idProduit');
        $this->load->model('ObjetModel');
        $data['data'] = $this->ObjetModel->getObjetById($this->input->get("idProduit"));

        $this->load->model('CategorieModel');

        $dataS['dataS'] = $this->CategorieModel->getAll();
        $this->load->view('headerClient',$dataS);
		$this->load->view('detailObjet', $data);
        $this->load->view('footerClient');
	}	
    public function accueilClient()
    {
        //liste de tous les categories
        //any amnio GetAllCatClientCtrl/index2 no miantso ilay fonction
        redirect(site_url('/GetAllCatClientCtrl/index2'));
        
    }
    public function echanger()
    {
        $idProduit1 = $this->input->get('idProduit');
        $this->load->model('ObjetModel');
        $data['data'] = $this->ObjetModel->getMesObjets();
        $data['produit'] = $idProduit1;
        $this->load->model('CategorieModel');

        $dataS['dataS'] = $this->CategorieModel->getAll();
        $this->load->view('headerClient',$dataS);
        $this->load->view('getMesObjets', $data);
        $this->load->view('footerClient');
    }	
    public function choisir()
    {
        $idProduit1 = $this->input->get('idProduit1');
        $idProduit2 = $this->input->get('idProduit2');
        $this->load->model('EchangeModel');
        $this->EchangeModel->demanderEchange($idProduit1, $idProduit2);
        
        $this->load->model('ObjetModel');
        $data['data'] = $this->ObjetModel->getAll();

        $this->load->model('CategorieModel');

        $dataS['dataS'] = $this->CategorieModel->getAll();
        $this->load->view('headerClient',$dataS);
        $this->load->view('getAllObjet', $data);
        $this->load->view('footerClient');
    }
}
?>