<?php
	require_once 'auth.session.php';
    
    if (getSessionExiste()){
        $nom = $_SESSION['infoAuth'];
    }

	require_once './data/ConnexionDemo.classe.php';
	$cd = new ConnexionDemo();
	$connexion = $cd->getConnexion();


	$lieu_ = filter_input(INPUT_POST,'lieu',FILTER_DEFAULT);
	$utilisateur_ = filter_input(INPUT_POST,'utilisateur',FILTER_DEFAULT);
	$pathologie_ = filter_input(INPUT_POST,'pathologie',FILTER_DEFAULT);


	

	$conn = $connexion->prepare("UPDATE lieux SET pathologie=:_pathologie WHERE utilisateur=:utilisateur_ AND nom=:lieu_");
	$conn->bindParam(":_pathologie",$pathologie_,PDO::PARAM_INT);
	$conn->bindParam(":utilisateur_",$utilisateur_,PDO::PARAM_STR);
	$conn->bindParam(":lieu_",$lieu_,PDO::PARAM_STR);
	$conn->execute();
	$connexion = null;
	header("Location: authentificationOK.php");
?>