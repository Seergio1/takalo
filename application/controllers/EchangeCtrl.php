<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('BaseController.php');

class EchangeCtrl extends BaseController {
    
    public function __construct(){
        parent::__construct();
        //$this->load->library('session');
    } 

	public function listeDemande() 
    {
		redirect(site_url('/GetAllCatClientCtrl/index3'));
	}		

    public function annuler()
    {
        $idEchange = $this->input->get('idEchange');
        $this->load->model('EchangeModel');
        $this->EchangeModel->annulerEchange($idEchange);

        $this->listeDemande();
    }

    public function listeRecu() 
    {
		redirect(site_url('/GetAllCatClientCtrl/index4'));
	}		

    public function refuser()
    {
        $idEchange = $this->input->get('idEchange');
        $this->load->model('EchangeModel');
        $this->EchangeModel->annulerEchange($idEchange);

        $this->listeRecu();
    }

    public function accepter()
    {
        $idEchange = $this->input->get('idEchange');
        $this->load->model('EchangeModel');
        $this->EchangeModel->accepterEchange($idEchange);
        $echange = $this->EchangeModel->getEchangeById($idEchange);

        $this->load->model('ObjetModel');
        $produit1 = $this->ObjetModel->getObjetById($echange['idObjet1']);
        $produit2 = $this->ObjetModel->getObjetById($echange['idObjet2']);

        $this->ObjetModel->updateObjet($produit2['idUtilisateur'], $produit1['id']);
        $this->ObjetModel->updateObjet($produit1['idUtilisateur'], $produit2['id']);

        $this->load->model('HistoriqueModel');
        $this->HistoriqueModel->insert($produit1['id'], $produit2['idUtilisateur']);
        $this->HistoriqueModel->insert($produit2['id'], $produit1['idUtilisateur']);

        $this->listeRecu();
    }

    public function detailEchange()
    {
        $idProduit = $this->input->get('idProduit');
        $this->load->model('ObjetModel');
        $data['data'] = $this->ObjetModel->getObjetById($this->input->get("idProduit"));
        
        $this->load->model('CategorieModel');

        $dataS['dataS'] = $this->CategorieModel->getAll();
        $this->load->view('headerClient',$dataS);
		$this->load->view('detailEchange', $data);
        $this->load->view('footerClient');
    }
}

?>