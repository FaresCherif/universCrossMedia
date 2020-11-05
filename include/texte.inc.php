
<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];}
else{
	$page=0;
}

switch ($page) {
	case 0:
		include_once('pages/Accueil.inc.php');
	break;

	case 1:
		include_once('pages/AccueilFilm.inc.php');
	break;

	case 2:
		include_once('pages/AccueilJeuVideo.inc.php');
	break;

	case 3:
		include_once('pages/GenreFilm.inc.php');
		break;

	case 4:
		include_once('pages/UniversFilm.inc.php');
		break;

	case 5:
		include_once('pages/Film.inc.php');
		break;

	case 11:
		include_once('pages/deconnexion.inc.php');
		break;

	case 12 :
		include_once('pages/connexion.inc.php');
		break;

	case 13:
		include_once('pages/inscription.inc.php');
		break;

	case 14:
		include_once('pages/listeUtilisateur.inc.php');
		break;

	case 15:
		include_once('pages/detailUtilisateur.inc.php');
		break;

	case 16:
		include_once('pages/passerUtilisateurBasique.inc.php');
		break;

	case 17:
		include_once('pages/passerUtilisateurIntermediaire.inc.php');
		break;

	case 18:
		include_once('pages/passerUtilisateurAdministrateur.inc.php');
		break;

	case 19:
		include_once('pages/monCompte.inc.php');
		break;

	case 20:
		include_once('pages/changerPseudo.inc.php');
		break;

	case 21:
		include_once('pages/changerMdp.inc.php');
		break;

	case 22:
		include_once('pages/ajouterFilm.inc.php');
		break;



	default : include_once('pages/Accueil.inc.php');
}

?>
