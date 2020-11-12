<?php
$listeJeuVideo=$jeuVideoManager->getListeJeuGenre($_GET['genre']);


if($listeJeuVideo!=null){
  ?>
  <table id="rwd-table">
    <tr>
      <th>Titre de film</th>
      <th>Type media</th>
      <th>Univers</th>
    </tr><?php

  foreach ($listeJeuVideo as $jeu){?>
      <tr> <th>
    <a href="index.php?page=26&jeu=<?php echo $jeu->getId() ?>">
    <?php echo($jeu->getName()) ?><br></a>
  </th>
  <th> Jeu video </th>
  <th> <?php echo($jeuVideoManager->getJeuUnivers($jeu->getName())->getName() ) ?> </th>
    <?php

  }
  ?> </table> <?php
}
else{
  echo("Il n'y a pas encore de jeu de ce type sur ce site. Soyez le premier à en rajouter !!");
}

if(utilisateurEstConnecte() && utilisateur()->getPermission()!=0){
  ?>
  <ul>
      <li><a href="index.php?page=25">Ajouter un Jeu</a></li>
  </ul>
  <?php
}
 ?>
