<?php

$listeUnivers = $universManager ->getListeUnivers();
$listeGenre =$genreManager->getListeGenre();
?>

<h2> Genre </h2>

<?php
foreach ($listeGenre as $genre){?>
  <a href="index.php?page=3&genre=<?php echo $genre->getId() ?>">
  <?php echo($genre->getName()) ?><br></a><?php
}
?>

<h2> Univers </h2>
<?php
foreach ($listeUnivers as $univers){?>
  <a href="index.php?page=4&univers=<?php echo $univers->getId() ?>"><?php
  echo($univers->getName());?></a><br><?php
}



?>
