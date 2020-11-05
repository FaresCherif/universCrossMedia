<?php

$listeFilmUnivers = $filmManager ->getListeFilmUnivers($_GET['univers']);
$univers = $universManager->getUnivers($_GET['univers']);


?><div class="univers">


<img src="image/univers/<?php echo  $univers->getImage()?>" alt=""><br><br><br><?php

?><h2><?php echo $univers->getName() ?></h2>

<div class="description"><?php echo $univers->getDescription() ?></div><br></div>

<?php if($listeFilmUnivers!=null){
  foreach ($listeFilmUnivers as $film){?>
    <a href="index.php?page=5&film=<?php echo $film->getId() ?>">
    <?php echo($film->getName()) ?></a><br><?php
  }


}
else{
  echo("Il n'y a pas encore de film dans cet univers. Soyez le premier à en rajouter !");
}

if(utilisateurEstConnecte() && utilisateur()->getPermission()!=0){
  ?>
  <ul>
      <li><a href="index.php?page=22">Ajouter un film</a></li>
  </ul>
  <?php
}
 ?>
</div>
