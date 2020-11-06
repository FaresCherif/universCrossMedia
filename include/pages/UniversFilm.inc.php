<?php

$listeFilmUnivers = $filmManager ->getListeFilmUnivers($_GET['univers']);
$listeJeuUnivers= $jeuVideoManager->getListeJeuUnivers($_GET['univers']);
$univers = $universManager->getUnivers($_GET['univers']);

?><div class="univers">


<img src="image/univers/<?php echo  $univers->getImage()?>" alt=""><br><br><br><?php

?><h2><?php echo $univers->getName() ?></h2>

<div class="description"><?php echo $univers->getDescription() ?></div><br></div>

<?php if($listeFilmUnivers!=null || $listeJeuUnivers!=null){
  foreach ($listeFilmUnivers as $film){?>
    <a href="index.php?page=5&film=<?php echo $film->getId() ?>">
    <?php echo($film->getName()) ?></a><br><?php
  }

  foreach ($listeJeuUnivers as $jeu){ ?>

    <a href="index.php?page=26&jeu=<?php echo $jeu->getId() ?>">
    <?php echo($jeu->getName()) ?></a><br><?php
  }


}
else{
  echo("Il n'y a pas encore de media dans cet univers. Soyez le premier à en rajouter !");
}

if(utilisateurEstConnecte() && utilisateur()->getPermission()!=0){
  ?>
  <ul>
      <li><a href="index.php?page=22">Ajouter un film</a></li>
      <li><a href="index.php?page=25">Ajouter un jeu video</a></li>

  </ul>
  <?php
}
 ?>
</div>
