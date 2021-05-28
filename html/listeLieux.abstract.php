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
    abstract public function getLieuById($id);

    protected function selectToutes($user)
    {
        try {
            $this->liste = $this->connexion->prepare("SELECT nom, tempsArrive FROM lachan_tp4.lieux WHERE utilisateur=:user");

            $this->liste->bindParam(":user",$user,PDO::PARAM_INT);
            //La requête complétée, avec une valeur sur la variable, est passée au
            // serveur de bd, sur le schéma.
            $this->liste->execute();

        } catch (Exception $e){
            error_log($e->getMessage());
        }
    }


    protected function selectById($id)
    {
        try {
            $this->liste = $this->connexion->prepare("select * from fleurs where id=:id");

            $this->liste->bindParam(":id",$id,PDO::PARAM_INT);
    
            //La requête complétée, avec une valeur sur la variable, est passée au
            // serveur de bd, sur le schéma.
            $this->liste->execute();

        } catch (Exception $e){
            error_log($e->getMessage());
        }
    }
}