function afficherAjoutLieu(){
	bloc = document.getElementById('ajoutLieu')
	if(bloc.style.display === 'inline-block'){
		bloc.style.display = 'none';
		bloc.style.paddingLeft = 10%;
	}else{ //Afficher le bloc s'il ne l'est pas
		bloc.style.display = 'inline-block';
	}
}