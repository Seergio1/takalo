<?php
    class ObjetModel extends CI_Model
    {

        public function getAll()
        {
            $sql = "SELECT * FROM objet WHERE idUtilisateur != %s";
            $sql = sprintf($sql, $this->db->escape($this->session->userdata('idUser')));
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
 
        public function getMesObjets()
        {
            $sql = "SELECT * FROM objet WHERE idUtilisateur = %s";
            $sql = sprintf($sql, $this->db->escape($this->session->userdata('idUser')));
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

        public function insertObjet($idCategorie, $titre, $description, $photo, $prix)
        {
            $sql = "INSERT INTO objet VALUES (default, %s, %s, %s, %s, %s, %s)";
            
            $sql = sprintf($sql, $this->db->escape($idCategorie), $this->db->escape($this->session->userdata('idUser')), $this->db->escape($titre), $this->db->escape($description), $this->db->escape($photo), $this->db->escape($prix));
            $this->db->query($sql);
            // echo $this->db->affected_rows();
        }

        public function deleteObjet($idObjet)
        {
            $sql = "DELETE FROM objet WHERE id=%s";
            $sql = sprintf($sql, $this->db->escape($idObjet));
            $this->db->query($sql);
            // echo $this->db->affected_rows();
        }

        public function updateObject($titre, $description, $prix, $idObjet)
        {
            $sql = "UPDATE objet SET titre = %s, description = %s, prix = %s WHERE id = %s";
            $sql = sprintf($sql, $this->db->escape($titre), $this->db->escape($description), $this->db->escape($prix), $this->db->escape($idObjet));
            $this->db->query($sql);
            // echo $this->db->affected_rows();
        }

        public function getObjetById($idObjet)
        {
            $sql = "SELECT * FROM objet WHERE id = %s";
            $sql = sprintf($sql, $this->db->escape($idObjet));
            $query = $this->db->query($sql);
            $row = $query->row_array();
            return $row;
        }

        public function updateObjet($idUtilisateur, $idObjet)
        {
            $sql = "UPDATE objet SET idUtilisateur = %s WHERE id = %s";
            $sql = sprintf($sql, $this->db->escape($idUtilisateur), $this->db->escape($idObjet));
            $this->db->query($sql);
            // echo $this->db->affected_rows();
        }
    }
?>