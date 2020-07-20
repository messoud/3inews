<?php

namespace Inews;

defined('INEWS') or die('Acces interdit');

class UserModel implements \F3il\AuthenticationInterface {

    public function creer(array $data) {
        $db = \F3il\Database::getInstance();

        $sql = "INSERT INTO user SET "
                . "nom = :nom, "
                . "prenom = :prenom ";
        $req = $db->prepare($sql);
        try {
            $req->bindValue(':nom', $data['nom']);
            $req->bindValue(':prenom', $data['prenom']);
            
            $req->execute();
        } catch (\PDOException $ex) {
            throw new \F3il\Error("Erreur SQL " . $ex->getMessage());
        }
    }

    public function getUser($userId) {
        $db = \F3il\Database::getInstance();

        $sql = "SELECT * FROM user WHERE id_user = :id";
        $req = $db->prepare($sql);
        try {
            $req->bindValue(':id', $userId, \PDO::PARAM_INT);
            $req->execute();
        } catch (\PDOException $ex) {
            throw new \F3il\SqlError($sql, $req, $ex);
        }
        return $req->fetch(\PDO::FETCH_ASSOC);
    }
    
     public function getUserByLogin($userLogin) {
        $db = \F3il\Database::getInstance();

        $sql = "SELECT * FROM user WHERE login = :login";
        $req = $db->prepare($sql);
        try {
            $req->bindValue(':login', $userLogin, \PDO::PARAM_STR);
            $req->execute();
        } catch (\PDOException $ex) {
            throw new \F3il\SqlError($sql, $req, $ex);
        }
        return $req->fetch(\PDO::FETCH_ASSOC);
    }
    
    public function lister() {
        $db = \F3il\Database::getInstance();

        $sql = "SELECT * FROM user ORDER BY nom, prenom";
        $req = $db->prepare($sql);
        try {
            $req->execute();
        } catch (\PDOException $ex) {
            throw new \F3il\SqlError($sql, $req, $ex);
        }
        return $req->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function supprimer($id_user) {
           $db = \F3il\Database::getInstance();
        
        $sql= "DELETE FROM user WHERE id = :id_user";
        $req= $db->prepare($sql);
        
        try {
            $req->bindValue(':id_user', $id_user);
            
            $req->execute();
        } catch (\PDOException $ex) {
            throw  new \F3il\Error("Erreur SQL ".$ex->getMessage());
        }
    }

    public function auth_getLoginKey() {
        
    }

    public function auth_getPasswordKey() {
        
    }

    public function auth_getSalt($user) {
        
    }

    public function auth_getUserById($id) {
        return $this->getUser($id);
    }

    public function auth_getUserByLogin($login) {
        return $this->getUserByLogin($userLogin);
    }

    public function auth_getUserIdKey() {
        
    }

}
