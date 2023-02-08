<?php
    class RechercheModel extends CI_Model
    {
        public function Recherche1($mot , $idCategorie)
        {
            $sql = "SELECT objet.* FROM objet 
                    JOIN categorie ON objet.idCategorie = categorie.id
                    WHERE objet.titre LIKE '%".$mot."%' and categorie.id =".$idCategorie;
            
            // $sql = sprintf($sql, $this->db->escape($idCategorie));
            echo $sql;
            $query = $this->db->query($sql);
            $array = array();
            foreach ($query -> result_array() as $result) 
            {
                $tab = array(
                "id" => $result['id'],
                "idCategorie" => $result['idCategorie'],
                "idUtilisateur" => $result['idUtilisateur'],
                "titre" => $result['titre'],
                "description" => $result['description'],
                "photo" => $result['photo'],
                "prix" => $result['prix']
                );
                array_push($array, $tab);
            }
            return $array;
        }
        public function Recherche2($mot)
        {
            $sql = "SELECT objet.* FROM objet 
                    JOIN categorie ON objet.idCategorie = categorie.id
                    WHERE objet.titre LIKE '%".$mot."%'";
            // $sql = sprintf($sql, $this->db->escape($mot)); 
            $query = $this->db->query($sql);
            $array = array();
            foreach ($query -> result_array() as $result) 
            {
                $tab = array(
                "id" => $result['id'],
                "idCategorie" => $result['idCategorie'],
                "idUtilisateur" => $result['idUtilisateur'],
                "titre" => $result['titre'],
                "description" => $result['description'],
                "photo" => $result['photo'],
                "prix" => $result['prix']
                );
                array_push($array, $tab);
            }
            return $array;
        }
    }
?>