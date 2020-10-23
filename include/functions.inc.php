<?php


/////////////////////////////////////////////////////////////////

// But : transformer une date francaise en une date anglaise
// Entrée : date francaise (string)
// Sortie : date anglaise (string)
function getEnglishDate($date){
	$membres = explode('/', $date);
	$date = $membres[2].'-'.$membres[1].'-'.$membres[0];
	return $date;
}
// But : transformer une date anglaise en une date francaise
// Entrée : date anglaise (string)
// Sortie : date francaise (string)
function getFrenchDate($date){
	$membres = explode('-',$date);
	$date = $membres[2].'/'.$membres[1].'/'.$membres[0];
	return $date;
}


///////////////////////////////////////////////////////////////////


// But : cryper un mot de passe avec sha256 et un grain de sel
// Entree : mot de passe (string)
// Sortie : mot de passe crypte (string de longueur 64 caractères)
function crypter($password){
	$password .= "2@sdf!Gr@in2Sel";
	return hash("sha256", $password);
}


////////////////////////////////////////////////////////////////////


// But : ajouter une erreur
// Entrée : erreur (String)
// Sortie : $_SESSION["erreur"]
function ajouterErreur($erreur){
	$_SESSION["erreur"] = $erreur;
}
// But : fonction qui affiche les erreurs
// Entree : / ($_SESSION["erreurs"])
// Sortie : Affichage de l'erreur
function afficherErreurs(){
	if (isset($_SESSION["erreur"])){
		$erreur = $_SESSION["erreur"];
		unset($_SESSION["erreur"]);
		echo '<p><img src="image/erreur.svg" alt="Erreur" class="imageSvg"> '.$erreur.'</p>';
	}
}


///////////////////////////////////////////////////////////////////////////////


function redirigerVersLaPageAccueil(){
	echo '<meta http-equiv="refresh" content="0;url=index.php?page=0"/>';
}
function redirigerVersLaPage($page){
	echo '<meta http-equiv="refresh" content="0;url=index.php?page='.$page.'"/>';
}
function redirigerAvecDuree($page, $duree){
	echo '<meta http-equiv="refresh" content="'.$duree.';url=index.php?page='.$page.'"/>';
}



/////////////////////////////////////////////////////////////////////////



// But : fonction qui permet à un utilisateur de se connecter
//Entree : utilisateur (objet personne)
//Sortie : /
function connecter($utilisateur){
	$_SESSION['utilisateur'] = serialize($utilisateur);
}

// But : fonction qui indique si l'utilisateur est connecté
// Entree : /
// Sortie : booleen
function utilisateurEstConnecte(){
	return isset($_SESSION['utilisateur']);
}
// But : fonction qui indique si l'utilisateur n'est pas connecté
// Entree : /
// Sortie : booleen
function utilisateurNEstPasConnecte(){
	return !utilisateurEstConnecte();
}
// But : fonction qui renvoie l'utilisateur
// attention : pas te test pour savoir si l'utilisateur est connecté
// Entree : /
// Sortie : objet personne
function utilisateur(){
	return unserialize($_SESSION["utilisateur"]);
}
// But : déconnecter l'utilisateur de son compte
// Entrée : /
// Sortie : /
function deconnecterUtilisateur(){
	unset($_SESSION["utilisateur"]);?>
	<meta http-equiv="refresh" content="2;url=index.php"/><?php
}





///////////////////////////////////////////////////////////////////////
