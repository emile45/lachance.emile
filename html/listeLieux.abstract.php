<?php
require_once './data/ConnexionDemo.classe.php';

/**
 * Description de ListeFleurs
 * Classe de récupération des noms de fleurs sur une bd.
 * @author Claude
 */
abstract class listeLieux {
    protected $liste;
    protected $connexion;
    
    abstract public function getListe($user);

    protected function selectToutes($user)
    {
        try {
            $this->liste = $this->connexion->prepare("SELECT * FROM lieux WHERE utilisateur=:user");

            $this->liste->bindParam(":user",$user,PDO::PARAM_STR);
            //La requête complétée, avec une valeur sur la variable, est passée au
            // serveur de bd, sur le schéma.
            $this->liste->execute();

        } catch (Exception $e){
            error_log($e->getMessage());
        }
    }


}