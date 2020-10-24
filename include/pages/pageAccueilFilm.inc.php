<?php

$listeUnivers = $universManager ->getListeUnivers();
$listeGenre =$genreManager->getListeGenre();
?>

<h2> Genre </h2>

<?php
foreach ($listeGenre as $genre){
  echo($genre->getName());?><br><?php
}
?>

<h2> Univers </h2>
<?php
foreach ($listeUnivers as $univers){
  echo($univers->getName());?><br><?php
}



?>
