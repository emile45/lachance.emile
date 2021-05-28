<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControleurData
 *
 * @author Claude
 */

require_once './data/SelectProvince.classe.php';
require_once './data/SelectUtilisateur.classe.php';

class ControleurData {
    
    public static function getProvincesDropDown() {
        $classe = new SelectProvince();
        return $classe->getData();
    }
    
    public static function getUtilisateursDropDown() {
        $classe = new SelectUtilisateur();
        return $classe->getData();
    }    
}

