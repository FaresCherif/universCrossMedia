<?php
$listeFilm=$filmManager->getListeFilmGenre($_GET['genre']);


if($listeFilm!=null){
  ?>
  <table id="rwd-table">
    <tr>
      <th>Titre de film</th>
      <th>Type media</th>
      <th>Univers</th>
    </tr><?php

  foreach ($listeFilm as $film){?>
    <tr> <th>
    <a href="index.php?page=5&film=<?php echo $film->getId() ?>">
    <?php echo($film->getName()) ?><br></a>
  </th>
  <th> Film </th>
  <th> <?php echo($filmManager->getFilmUnivers($film->getName())->getName() ) ?> </th>
    <?php
  }

  ?></table><?php
}
else{
  echo("Il n'y a pas encore de film de ce type sur ce site. Soyez le premier à en rajouter !!");
}

if(utilisateurEstConnecte() && utilisateur()->getPermission()!=0){
  ?>
  <ul>
      <li><a href="index.php?page=22">Ajouter un film</a></li>
  </ul>
  <?php
}
 ?>
