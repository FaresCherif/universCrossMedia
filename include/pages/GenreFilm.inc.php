<?php
$listeFilm=$filmManager->getListeFilmGenre($_GET['genre']);


if($listeFilm!=null){
  foreach ($listeFilm as $film){?>
    <a href="index.php?page=5&film=<?php echo $film->getId() ?>">
    <?php echo($film->getName()) ?><br></a><?php
  }
}
else{
  echo("Il n'y a pas encore de film de ce type sur ce site. Soyez le premier à en rajouter !!");
}
 ?>
