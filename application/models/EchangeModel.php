<?php
    class EchangeModel extends CI_Model
    {
        public function demanderEchange($idProduit1, $idProduit2)
        {
            $sql = "INSERT INTO echange (id, idObjet1, idObjet2, dateDemande, etat) VALUES (default, %s, %s, now(), 'demander')";
            $sql = sprintf($sql, $this->db->escape($idProduit1), $this->db->escape($idProduit2));
            $this->db->query($sql);
        }

        public function annulerEchange($idEchange)
        {
            $sql = "UPDATE echange SET etat = 'annuler', dateAccepte=now() WHERE id = %s";
            $sql = sprintf($sql, $this->db->escape($idEchange));
            $this->db->query($sql);
        }
        
        public function accepterEchange($idEchange)
        {
            $sql = "UPDATE echange SET etat = 'accepter', dateAccepte=now() WHERE id = %s";
            $sql = sprintf($sql, $this->db->escape($idEchange));
            $this->db->query($sql);
        }
        public function getAllDemande()
        {
            $sql = "SELECT * FROM echange WHERE etat = 'demander' and idObjet2 in (SELECT id FROM objet WHERE idUtilisateur = %s)";
            $sql = sprintf($sql, $this->db->escape($this->session->userdata('idUser')));
            $query = $this->db->query($sql);
            $array = array();
            foreach ($query -> result_array() as $result) 
            {
                $tab = array(
                "id" => $result['id'],
                "idObjet1" => $result['idObjet1'],
                "idObjet2" => $result['idObjet2'],
                "dateDemande" => $result['dateDemande']
                );
                array_push($array, $tab);
            }
            return $array;
        }

        public function getAllRecu()
        {
            $sql = "SELECT * FROM echange WHERE etat = 'demander' and idObjet1 in (SELECT id FROM objet WHERE idUtilisateur = %s)";
            $sql = sprintf($sql, $this->db->escape($this->session->userdata('idUser')));
            $query = $this->db->query($sql);
            $array = array();
            foreach ($query -> result_array() as $result) 
            {
                $tab = array(
                "id" => $result['id'],
                "idObjet1" => $result['idObjet1'],
                "idObjet2" => $result['idObjet2'],
                "dateDemande" => $result['dateDemande']
                );
                array_push($array, $tab);
            }
            return $array;
        }
        public function updateEchange($idUtilisateur, $idObjet)
        {
            $sql = "UPDATE objet SET idUtilisateur = %s WHERE id = %s";
            $sql = sprintf($sql, $this->db->escape($idUtilisateur), $this->db->escape($idObjet));
            $this->db->query($sql);
            // echo $this->db->affected_rows();
        }

        public function getEchangeById($idEchange)
        {
            $sql = "SELECT * FROM echange WHERE id = %s";
            $sql = sprintf($sql, $this->db->escape($idEchange));
            $query = $this->db->query($sql);
            $row = $query->row_array();
            return $row;
        }
    }
?>