<?php
require_once './data/Connexion.abstract.php';

class ConnexionDemo extends Connexion {

    /**
     * Connexion sur la base de données ciblé par le fichier de config.
     */
    public function getConnexion() {
        try {
            require_once './data/config.inc.php';
            $this->connexion = new PDO(DSN, UTILISATEUR, MDP);
            return $this->connexion;
        } catch (Exception $e){
            error_log($e->getMessage());
        }
    }
}
?>