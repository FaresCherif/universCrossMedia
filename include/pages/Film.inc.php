<?php
$film=$filmManager->getFilm($_GET['film']);
$listeAvisFilm=$filmManager->getListeAvisFilm($_GET['film']);


?> <h2><?php echo $film->getName(); ?> </h2>

<?php


 ?>
 <div class="filmDescription">
 <img src="image/film/<?php echo  $film->getImage()?>" alt=""><br><br><br><?php
?><p><?php echo $film->getDescription() ?>
</div>

<?php
foreach ($listeAvisFilm as $avis){
  ?><div class="commentaire"><?php
  $utilisateur=$utilisateurManager->getUtilisateur($avis->getID_utilisateur());

  ?><h1><?php echo( $utilisateur->getPseudo());?></h1>
  <p><?php echo($avis->getCommentaire()) ?><br></p>

</div>
  <?php

}
