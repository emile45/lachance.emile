function onCovidCheck(){
	btn = document.getElementById('btnCovid');
	btn.style.display = 'inline-block';

	check = document.getElementById('covidCheck').disabled = true;
}



function ajaxCovid(){
	var updown = document.getElementById("updownLieux");
	var nom = updown.options[updown.selectedIndex].value;
	
	var email = document.getElementById("nomUser").textContent;
	var pathologie =1;
	console.log(email);
	console.log(nom);
	console.log(pathologie);

    var param ="&lieu="+nom+"&utilisateur="+email+"&pathologie="+pathologie;

     if (window.XMLHttpRequest) {
        requete = new XMLHttpRequest();  
    }
    else
    	requete = new ActiveXObject("Microsoft.XMLHTTP");

    

	url = "./covid.redirect.php";
	
  	var httpRequest = false;
    requete.onreadystatechange = function() { statusFeedback(requete); };
    requete.open('POST', url, true);
    requete.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    requete.send(param);

}
function statusFeedback(requete)
{
	if (requete.readyState == 4) {
            if (requete.status == 200) {
            	alert('Votre pathologie a bien été enregistrée.'); 
            } else {
                alert('Erreur: '+ requete.status);
            }
        } 

}
