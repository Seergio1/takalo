<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('BaseController.php');

    class ObjetCtrl extends BaseController {
    
        public function __construct(){
            parent::__construct();
//$this->load->library('session');
        }

        public function mesObjets()
        {
            redirect(site_url('/GetAllCatClientCtrl/index5'));
        }
        public function modifierObjet()
        {   
            $idProduit = $this->input->get('idProduit');
            $this->load->model('ObjetModel');
            $data['data'] = $this->ObjetModel->getObjetById($idProduit);

            $this->load->view('headerClient');
            $this->load->view('modifier',$data);
            $this->load->view('footerClient');
        }

        public function modifier()
        {
            $idProduit = $this->input->get('id');
            $titre = $this->input->get('nom');
            $description = $this->input->get('description');
            $prix = $this->input->get('prix');

            $this->load->model('ObjetModel');
            $this->ObjetModel->updateObject($titre, $description, $prix, $idProduit);

            $this->mesObjets();
        }

        public function supprimer()
        {
            $idproduit = $this->input->get('idProduit');
            $this->load->model('ObjetModel');
            $this->ObjetModel->deleteObjet($idproduit);

            $data['data'] = $this->ObjetModel->getMesObjets();
            $this->load->view('headerClient');
            $this->load->view('listeMesObjets', $data);
            $this->load->view('footerClient');
        }

        public function inserer()
        {
            redirect(site_url('/GetAllCatClientCtrl/index'));
        }

        
        public function ajouter()
        {
            $titre = $this->input->post('nom');
            $idCategorie = $this->input->post('categorie');
            $prix = $this->input->post('prix');
            $description = $this->input->post('desc');
            $allNom = '';
            $this->load->model('ObjetModel');
            if($titre == '' || $titre == NULL || $idCategorie == '' || $idCategorie == NULL || $prix == '' || $prix == NULL || $description == '' || $description == NULL)
            {
                $data['data'] = $this->ObjetModel->getAll();
                $this->load->view('headerClient');
                $this->load->view('getAllObjet', $data);
                $this->load->view('footerClient');
            }
            
            if(isset($_POST['envoyer'])) 
            {
                $fichier = array();
                $taille = array();
                $extension = array();
                $fichier_temp = array();
        
                for ($i=0; $i <count($_FILES['avatar']['name']) ; $i++) { 
                    array_push($fichier,basename($_FILES['avatar']['name'][$i]));
                    array_push($taille,filesize($_FILES['avatar']['tmp_name'][$i]));
                    array_push($extension,strrchr($_FILES['avatar']['name'][$i], '.'));
                    array_push($fichier_temp,$_FILES['avatar']['tmp_name'][$i]);
                }
                $dossier = "./assets/image/";
            
                $taille_maxi = 10000000;
                
                $nbfichiersEnvoyes = count($fichier_temp);
                
                for($i=0; $i<$nbfichiersEnvoyes; $i++) 
                {
                    $extensions = array('jpg', 'jpeg','png');
                    
                    $fichier[$i] = strtr($fichier[$i],
                        'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
                        'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                    $fichier[$i] = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier[$i]);
                    if(move_uploaded_file($fichier_temp[$i], $dossier . $fichier[$i])) //
                    {
                        //echo '<span class="okdac">Upload effectué avec succès !</span>';
                    }
                    else
                    {
                        //echo '<span class="non">Echec de l\'upload !</span>';   
                    }
                    $allNom=$allNom.$fichier[$i].",";
                }
            }
            $this->ObjetModel->insertObjet($idCategorie, $titre, $description, $allNom, $prix);

            $data['data'] = $this->ObjetModel->getAll();
            $this->load->view('headerClient');
            $this->load->view('getAllObjet', $data);
            $this->load->view('footerClient');
        }

    
    }

?>