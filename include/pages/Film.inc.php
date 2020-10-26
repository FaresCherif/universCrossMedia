<?php
$film=$filmManager->getFilm($_GET['film']);
$listeAvisFilm=$filmManager->getListeAvisFilm($_GET['film']);


?> <h2><?php echo $film->getName(); ?> </h2>

<?php


 ?>
 <div class="filmDescription">

  <?php if($film->getImage()!=null){?>
 <img src="image/film/<?php echo  $film->getImage()?>" alt=""><br><br><br><?php
} ?><p><?php echo $film->getDescription() ?>
</div>





<?php if($_SESSION!=null){ ?>
<div class="avisPerso">
  <p>Note : </p>
  <div class="rating rating2">

      <a href="index.php?page=49&etoile=5" title="Give 5 stars" <?php if($avisManager->avisExiste($_GET['film'],utilisateur()->getID())&&$avisManager->getAvis($_GET['film'],utilisateur()->getID())->getNote()==5||isset($_GET['etoile'])&&$_GET['etoile']==5){?>style="color: orange"<?php echo "x";} ?>>★</a>
      <a href="index.php?page=49&etoile=4" title="Give 4 stars" <?php if($avisManager->avisExiste($_GET['film'],utilisateur()->getID())&&$avisManager->getAvis($_GET['film'],utilisateur()->getID())->getNote()>=4||isset($_GET['etoile'])&&$_GET['etoile']>=4){?>style="color: orange"<?php echo "x";} ?>>★</a>
      <a href="index.php?page=49&etoile=3" title="Give 3 stars" <?php if($avisManager->avisExiste($_GET['film'],utilisateur()->getID())&&$avisManager->getAvis($_GET['film'],utilisateur()->getID())->getNote()>=3||isset($_GET['etoile'])&&$_GET['etoile']>=3){?>style="color: orange"<?php echo "x";} ?>>★</a>
      <a href="index.php?page=49&etoile=2" title="Give 2 stars" <?php if($avisManager->avisExiste($_GET['film'],utilisateur()->getID())&&$avisManager->getAvis($_GET['film'],utilisateur()->getID())->getNote()>=2||isset($_GET['etoile'])&&$_GET['etoile']>=2){?>style="color: orange"<?php echo "x";} ?>>★</a>
      <a href="index.php?page=49&etoile=1" title="Give 1 stars" <?php if($avisManager->avisExiste($_GET['film'],utilisateur()->getID())&&$avisManager->getAvis($_GET['film'],utilisateur()->getID())->getNote()>=1||isset($_GET['etoile'])&&$_GET['etoile']>=1){?>style="color: orange"<?php echo "x";} ?>>★</a>

   </div>
</div>

<div class="commentairePerso">
  <p> Commentaire : </p>
  <textarea></textarea>
</div>

<?php
}

foreach ($listeAvisFilm as $avis){
  ?><div class="commentaire"><?php
  $utilisateur=$utilisateurManager->getUtilisateur($avis->getID_utilisateur());

  ?><div class="hautCommentaire">

  <h1><?php echo( $utilisateur->getPseudo());?></h1>
  <div class="rating">
    <a title="Give 1 stars" <?php if($avis->getNote()>=1||isset($_GET['etoile'])&&$_GET['etoile']>=1){?>style="color: orange"<?php echo "x";} ?>>★</a>
      <a title="Give 2 stars" <?php if($avis->getNote()>=2||isset($_GET['etoile'])&&$_GET['etoile']>=2){?>style="color: orange"<?php echo "x";} ?>>★</a>
        <a title="Give 3 stars" <?php if($avis->getNote()>=3||isset($_GET['etoile'])&&$_GET['etoile']>=3){?>style="color: orange"<?php echo "x";} ?>>★</a>
          <a title="Give 4 stars" <?php if($avis->getNote()>=4||isset($_GET['etoile'])&&$_GET['etoile']>=4){?>style="color: orange"<?php echo "x";} ?>>★</a>
      <a title="Give 5 stars" <?php if($avis->getNote()==5||isset($_GET['etoile'])&&$_GET['etoile']==5){?>style="color: orange"<?php echo "x";} ?>>★</a>
   </div>

 </div>

  <p><?php echo($avis->getCommentaire()) ?><br></p>

   <style type="text/css">

   .rating2 a:hover,
   .rating2 a:hover ~ a{
       color: orange;
       cursor: pointer;
   }

       .rating a {
           color: #aaa;
           text-decoration: none;
       }
       .rating a:focus,
       .rating a:focus ~ a     {
           color: orange;
           cursor: pointer;
       }
       .rating2 {
           direction: rtl;
       }
       .rating2 a {
           float:none
       }


   </style>



</div>
  <?php

}

?>
