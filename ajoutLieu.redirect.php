<?php
	require_once './session/auth.session.php';
    
    if (getSessionExiste()){
        $nom = $_SESSION['infoAuth'];
    }

	require_once './data/ConnexionDemo.classe.php';
	$cd = new ConnexionDemo();
	$connexion = $cd->getConnexion();


	$lieu = filter_input(INPUT_POST,'nomLieu',FILTER_DEFAULT);
	$numCiviqu = filter_input(INPUT_POST,'numCivique',FILTER_DEFAULT);
	$Rue = filter_input(INPUT_POST,'nomRue',FILTER_DEFAULT);
	$province_ = filter_input(INPUT_POST,'province',FILTER_DEFAULT);
	$Ville = filter_input(INPUT_POST,'nomVille',FILTER_DEFAULT);
	$dateArr_ = filter_input(INPUT_POST,'dateArr',FILTER_DEFAULT);
	$dateDep_ = filter_input(INPUT_POST,'dateDep',FILTER_DEFAULT);

	

	$connexion->query("INSERT INTO lieux (utilisateur, nom, numCivique, rue, nomVille, province, tempsArrive, tempsDepart) VALUES ('$nom', '$lieu', '$numCiviqu', '$Rue', '$Ville', '$province_', '$dateArr_', '$dateDep_')");

	$connexion = null;
	header("Location: authentificationOK.php");
?>