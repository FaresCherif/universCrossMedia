<?php

$listeFilmUnivers = $filmManager ->getListeFilmUnivers($_GET['univers']);
$listeJeuUnivers= $jeuVideoManager->getListeJeuUnivers($_GET['univers']);
$univers = $universManager->getUnivers($_GET['univers']);

?><div class="univers">


<img src="image/univers/<?php echo  $univers->getImage()?>" alt=""><br><br><br><?php

?><h2><?php echo $univers->getName() ?></h2>

<div class="description"><?php echo $univers->getDescription() ?></div><br></div>
<?php if($_GET['univers']!=-1){ ?>
<ul>
  <li><a href="index.php?page=32&univers=<?php echo($_GET['univers']) ?>">Modifier univers</a></li>
</ul>
<?php }
?>





<?php if($listeFilmUnivers!=null || $listeJeuUnivers!=null){

  ?>
  <table id="rwd-table">
    <tr>
      <th>Titre de film</th>
      <th>Type media</th>
      <th>Genre</th>
    </tr><?php

  foreach ($listeFilmUnivers as $film){?>
     <tr> <th><a href="index.php?page=5&film=<?php echo $film->getId() ?>">
    <?php echo($film->getName()) ?></a></th>
    <th> Film </th>
    <th><?php echo($filmManager->getFilmGenre($film->getName()))->getName() ?></th></tr>
    <?php
  }

  foreach ($listeJeuUnivers as $jeu){ ?>
    <tr>
    <th><a href="index.php?page=26&jeu=<?php echo $jeu->getId() ?>">
    <?php echo($jeu->getName()) ?></a><br></th>
    <th> Jeu video </th>

    <th>
      <?php echo($jeuVideoManager->getJeuGenre($jeu->getName()))->getName() ?>
    </th>
  </tr><?php


  }
  ?> </table> <?php

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
<div id="lienUniversTitrePrincipal">

<h2>Théories de liens avec d'autres univers</h2>

</div>

<form method="post">

<?php
if($lienuniversManager->getListeLienUnivers($_GET['univers'])!=null){
  $listeLienUnivers=$lienuniversManager->getListeLienUnivers($_GET['univers']);

  foreach ($listeLienUnivers as $lien) {
    ?>
    <div id="lienUniversTitre">
      <h3><?php echo($universManager->getUnivers($lien->getID_univers1())->getName())?> - <?php echo($universManager->getUnivers($lien->getID_univers2())->getName()); ?></h3>
    </div>

    <div id="lienUnivers">
      <p><?php echo($lien->getDescription()); ?></p>
      <?php if(utilisateurEstConnecte()){ ?>
        <ul>
            <li><a href="index.php?page=31&univers1=<?php echo($lien->getID_univers1()) ?>&univers2=<?php echo($lien->getID_univers2()) ?>">Modifier une théorie</a></li>
            <li><a href="index.php?page=30&univers1=<?php echo($lien->getID_univers1()) ?>&univers2=<?php echo($lien->getID_univers2()) ?>">Supprimer une théorie</a></li>
       </ul>
       <?php } ?>

    </div>
    <br>
    <?php

  }

}
else{
  echo("Cette univers n'a pas de théorie le reliant à un autre.");
}

if(utilisateurEstConnecte()){
 ?>
 <ul>
     <li><a href="index.php?page=29&univers=<?php echo($_GET['univers']) ?>">Ajouter une théorie</a></li>
</ul>
   <?php } ?>
</form>
