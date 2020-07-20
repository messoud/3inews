<?php

namespace Inews;

defined('INEWS') or die('Acces interdit');

class CompteModel {

    public function creer(array $data) {
        $db = \F3il\Database::getInstance();

        $sql = "INSERT INTO compte SET "
                . "id_utilisateur = :id_utilisateur, "
                . "login = :login "
                . "mot de passe= :mot de passe "
                . "admin = :admin "
        ;
        $req = $db->prepare($sql);
        try {
            $req->bindValue(':id_utilisateur', $data['id_utilisateur']);
            $req->bindValue(':login', $data['login']);
            $req->bindValue(':mot de passe', $data['mot de passe']);
            $req->bindValue(':admin', $data['admin']);
            $req->execute();
        } catch (\PDOException $ex) {
            throw new \F3il\Error("Erreur SQL " . $ex->getMessage());
        }
    }

    public function getCompte($compteId) {
        $db = \F3il\Database::getInstance();

        $sql = "SELECT * FROM compte WHERE id_compte = :id";
        $req = $db->prepare($sql);
        try {
            $req->bindValue(':id', $compteId);
            $req->execute();
        } catch (\PDOException $ex) {
            throw new \F3il\SqlError($sql, $req, $ex);
        }
        return $req->fetch(\PDO::FETCH_ASSOC);
    }

    public function modifier(array $data) {
        $db = \Sistr\Database::getInstance();

        $sql = "UPDATE compte SET"
                . "login = :login, "
                . "mot_de_passe= :mot_de_passe ";

        $req = $db->prepare($sql);
        try {
            $req->bindValue(':login', $data['login']);
            $req->bindValue(':mot_de_passe', $data['mot_de_passe']);
            $req->bindValue(':admin', $data['admin']);

            $req->execute();
        } catch (\PDOException $ex) {
            throw new \F3il\Error("Erreur SQL " . $ex->getMessage());
        }
    }

    public function supprimer($id_compte) {
        $db = \F3il\Database::getInstance();

        $sql = "DELETE FROM utilisateur WHERE id = :id_compte";
        $req = $db->prepare($sql);

        try {
            $req->bindValue(':id_compte', $id_compte);

            $req->execute();
        } catch (\PDOException $ex) {
            throw new \F3il\Error("Erreur SQL " . $ex->getMessage());
        }
    }

}
