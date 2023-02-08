<?php
    class HistoriqueModel extends CI_Model
    {
        public function insert($idObjet, $idUtilisateur)
        {
            $sql = "INSERT INTO historique VALUES (default, %s, %s, now())";
            $sql = sprintf($sql, $this->db->escape($idObjet), $this->db->escape($idUtilisateur));
            $this->db->query($sql);
        }
        public function getHistoriqueByIdObjet($idObjet)
        {
            $sql = "SELECT * FROM historique WHERE idObjet = %s";
            $sql = sprintf($sql, $this->db->escape($idObjet));
            $query = $this->db->query($sql);
            $array = array();
            foreach ($query -> result_array() as $result) 
            {
                $tab = array(
                "id" => $result['id'],
                "idObjet" => $result['idObjet'],
                "idUtilisateur" => $result['idUtilisateur'],
                "date" => $result['date']
                );
                array_push($array, $tab);
            }

            return $array;
        }
    }
?>