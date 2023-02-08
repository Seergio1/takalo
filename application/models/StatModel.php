<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatModel extends CI_Model {
    public function countUtilisateurInscrit(){
        $sql = "SELECT count(nom) as nbrUserInscrit FROM `utilisateur` WHERE admin ='non'"; 
        $query = $this->db->query($sql);
        $row = $query->row_array();
        
        return $row['nbrUserInscrit'];
    }
    public function countEchange(){
        $sql = "SELECT count(id) as nbrEchange FROM `echange` WHERE etat = 'accepter'"; 
        $query = $this->db->query($sql);
        $row = $query->row_array();

        // echo $row['nbrEchange'];
        
        return $row['nbrEchange'];
    }
}
?>