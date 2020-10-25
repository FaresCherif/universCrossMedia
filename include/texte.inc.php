
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



	default : include_once('pages/Accueil.inc.php');
}

?>
