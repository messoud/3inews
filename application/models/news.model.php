<?php

namespace Inews;
 
defined('INEWS') or die('Accès interdit !!');

class NewsModel {

    public function creer(array $data) {
        $db = \Sistr\Database::getInstance();

        $sql = "INSERT INTO news SET "
                . "couleur_text= :couleur_text, "
                . "couleur_bandeau = :couleur_bandeau, "
                . "position_bandeau = :position_bandeau, "
                . "taille_bandeau = :taille_bandeau, "
                . "date_redaction = :date_redaction, "
                . "news_endiffusion = :news_endiffusion, "
                . "id_compte = :id_compte, "
                . "transparence_bandeau = :transparence_bandeau, "
                . "taille_text = :taille_text, "
                . "text = :text, "
                . "image_root = :image_root";

        $req = $db->prepare($sql);
        try {
            $req->bindValue(':couleur_text', $data['couleur_text']);
            $req->bindValue(':couleur_bandeau', $data['couleur_bandeau']);
            $req->bindValue(':position_bandeau', $data['position_bandeau']);
            $req->bindValue(':taille_bandeau', $data['taille_bandeau']);
            $req->bindValue(':date_redaction', $data['date_redaction']);
            $req->bindValue(':news_endiffusion', $data['news_endiffusion']);
            $req->bindValue('id_compte', $data['id_compte']);
            $req->bindValue(':transparence_bandeau', $data['transparence_bandeau']);
            $req->bindValue(':taille_text', $data['taille_text']);
            $req->bindValue(':text', $data['text']);
            $req->bindValue(':image_root', $data['image_root']);
            $req->execute();
        } catch (\PDOException $ex) {
            throw new \F3il\Error("Erreur SQL " . $ex->getMessage());
        }
    }
    
    public function lister() {
        $db = \F3il\Database::getInstance();

        $sql = "SELECT * FROM news ORDER BY date_redaction";
        $req = $db->prepare($sql);
        try {
            $req->execute();
        } catch (\PDOException $ex) {
            throw new \F3il\SqlError($sql, $req, $ex);
        }
        return $req->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function modifierNews(array $data) {
        $db = \F3il\Database::getInstance();

        $sql = "UPDATE news SET"
                . " id_news = :id_news";

        $req = $db->prepare($sql);
        try {
            $req->bindValue(':id_news', $data['id_new']);

            $req->execute();
        } catch (\PDOException $ex) {
            throw new \F3il\Error("Erreur SQL " . $ex->getMessage());
        }
    }

    public function supprimerNews($id_news) {
        $db = \F3il\Database::getInstance();

        $sql = "DELETE FROM news WHERE id = :id_news";
        $req = $db->prepare($sql);

        try {
            $req->bindValue(':id_news', $id_news);

            $req->execute();
        } catch (\PDOException $ex) {
            throw new \F3il\Error("Erreur SQL " . $ex->getMessage());
        }
    }

}
