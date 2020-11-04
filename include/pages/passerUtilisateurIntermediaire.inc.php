<?php
$utilisateurManager->passerUtilisateurIntermediaire($_GET['utilisateur']);


?>

<meta http-equiv="refresh" content="0;url=index.php?page=15&utilisateur=<?php echo($_GET['utilisateur']) ?>"/>
