<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class UtilisateurModel extends CI_Model {
   

    public function insertUtilisateur($nom , $email , $pwd , $num){
        $sql = "INSERT INTO `utilisateur` value (default, %s, %s, %s, %s, 'non')";
        $rep = sprintf($sql, $this->db->escape($nom), $this->db->escape($email), $this->db->escape($pwd), $this->db->escape($num)); 
        $this->db->query($rep);
        // echo $this->db->affected_rows();
    }
    
    public function connect($email , $pwd) {
        $sql ="Select * from utilisateur where email = %s and  pwd = %s";
        $rep = sprintf($sql, $this->db->escape($email), $this->db->escape($pwd)); 
        $row = $this->db->query($rep);
        $row = $row->row_array();
        if($row != null) {
            $this->session->set_userdata('idUser', $row['id']);
            return $row['admin'];
        }
        return "false";
    }

    public function getById($id) {
        $sql = "SELECT * FROM `utilisateur` WHERE id =".$id; 
        $query = $this->db->query($sql);
        $array = array();
        foreach ($query -> result_array() as $result) {
            $tab = array(
                "id" => $result['id'],
                "nom" => $result['nom'],
                "email" => $result['email'],
                "pwd" => $result['pwd'],
                "numero" => $result['numero'],
                "admin" => $result['admin']
            );
            array_push($array, $tab);
        }

        return $array;
    }

    


}



?>