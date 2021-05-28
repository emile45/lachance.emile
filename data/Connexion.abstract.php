<?php
abstract class Connexion {
    protected $connexion;
    
    abstract public function getConnexion();

    public function fermerConnexion(){
        try {
            $this->connexion = null;
        } catch (Exception $e){
            error_log($e->getMessage());
        }
        
    }
}
?>