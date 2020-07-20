<?php

namespace Inews;

defined('INEWS') or die('Accès interdit !!');

class DiffusionModel {

    public function creer(array $data) {
        $db = \F3il\Database::getInstance();

        $sql = "INSERT INTO diffusion SET "
                . " date_mis_ajour= :date_mis_a_jour, ";
        $req = $db->prepare($sql);
        try {
            $req->bindValue(':date_mis_ajour', $data['date_mis_a_jour']);
            $req->execute();
        } catch (\PDOException $ex) {
            throw new \F3il\Error("Erreur SQL " . $ex->getMessage());
        }
    }
    
    public function getDiffusion() {
        $db = \F3il\Database::getInstance();

        $sql = "SELECT * FROM diffusion";
        $req = $db->prepare($sql);
        try {
            $req->execute();
        } catch (\PDOException $ex) {
            throw new \F3il\SqlError($sql, $req, $ex);
        }
        return $req->fetch(\PDO::FETCH_ASSOC);
    }

    public function modifier(array $data) {
        $db = \Sistr\Database::getInstance();
        
        $sql = "UPDATE diffusion SET"
                . " date_mise_a_jour = :date_mise_a_jour ";
        
        $req = $db->prepare($sql);
        try {
            $req->bindValue(':date_mise_a_jour', $data['date_mise_a_jour']);
    
            $req->execute();
        } catch (\PDOException $ex) {
            throw new \F3il\Error("Erreur SQL ".$ex->getMessage());
        }
    }

    public function supprimer($id_diffusion) {
        $db = \F3il\Database::getInstance();
        
        $sql= "DELETE FROM diffusion WHERE id = :id_diffusion";
        $req= $db->prepare($sql);
        
        try {
            $req->bindValue(':id_diffusion', $id_diffusion);
            
            $req->execute();
        } catch (\PDOException $ex) {
            throw  new \F3il\Error("Erreur SQL ".$ex->getMessage());
        }
    }

}
