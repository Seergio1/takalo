<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategorieModel extends CI_Model {
    
    public function insert($nom){
        $sql = "INSERT INTO `categorie` value (default, %s)";
        $rep = sprintf($sql, $this->db->escape($nom)); 
        $this->db->query($rep);
        // echo $this->db->affected_rows();
    }
    public function update($nom , $id){
        $sql = "UPDATE `categorie` SET nom = %s Where id = %s";
        $rep = sprintf($sql, $this->db->escape($nom), $this->db->escape($id)); 
        // var_dump($rep);
        $this->db->query($rep);
        // echo $this->db->affected_rows();
    }
    public function delete($id){
        $sql = "DELETE FROM `categorie` where id=%s";
        $rep = sprintf($sql, $this->db->escape($id)); 
        $this->db->query($rep);
        // echo $this->db->affected_rows();
    }
    public function getAll(){
        $sql = "SELECT * FROM `categorie`"; 
        $query = $this->db->query($sql);
        $array = array();
        foreach ($query -> result_array() as $result) {
            $tab = array(
                "id" => $result['id'],
                "nom" => $result['nom']
            );
            array_push($array, $tab);
        }

        return $array;
    }
    
}

?>