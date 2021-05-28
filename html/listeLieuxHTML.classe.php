<?php
require_once './html/listeLieux.abstract.php';
require_once './data/ConnexionDemo.classe.php';

/**
 * Classe de récupération de la connexion sur une base de données.
 * @author Claude
 */

class listeLieuxHTML extends listeLieux {

    public function __construct()
    {
        $cd = new ConnexionDemo();
        $this->connexion = $cd->getConnexion();
    }

    /**
     * Fourni une liste en HTML dropdown.
     */
    public function getListe($user){
        $this->selectToutes($user);

        $affiche = $lieu->nom;
        $affiche .= $lieu->tempsArrive; 
        $html = "<select name='updownLieux' id='updownLieux'>";
        while($lieu = $this->liste->fetch(PDO::FETCH_OBJ)){
            $html .= "<option value='".$lieu->nom."'>".$lieu->nom." ".$lieu->tempsArrive."</option>";
        }
        $html .= "</select>";

        return $html;
    }


}