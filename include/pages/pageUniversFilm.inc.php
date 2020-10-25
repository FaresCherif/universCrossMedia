<?php

$listeFilmUnivers = $filmManager ->getListeFilmUnivers($_GET['univers']);

if($listeFilmUnivers!=null){
  foreach ($listeFilmUnivers as $film){?>
    <a href="index.php?page=5&film=<?php echo $film->getId() ?>">
    <?php echo($film->getName()) ?></a><br><?php
  }
}
else{
  echo("Il n'y a pas encore de film dans cet univers. Soyez le premier à en rajouter !");
}
 ?>
