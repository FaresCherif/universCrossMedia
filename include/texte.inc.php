
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

	default : include_once('pages/pageAccueil.inc.php');
}

?>
