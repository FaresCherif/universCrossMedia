
<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];}
else{
	$page=0;
}

switch ($page) {
	case 0:
		include_once('pages/pageAccueil.inc.php');
	break;

	case 1:
		include_once('pages/pageAccueilFilm.inc.php');
	break;

	case 2:
		include_once('pages/pageAccueilJeuVideo.inc.php');
	break;

	case 3:
		include_once('pages/pageGenreFilm.inc.php');
		break;

	default : include_once('pages/pageAccueil.inc.php');
}

?>
